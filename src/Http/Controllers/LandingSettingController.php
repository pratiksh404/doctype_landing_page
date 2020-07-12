<?php

namespace doctype_admin\Landing\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use doctype_admin\Landing\Models\Landing;
use Intervention\Image\Facades\Image as Image;

class LandingSettingController extends Controller
{
    public function index()
    {
        $landing_setting = DB::table('landings')->count() == 1 ? DB::table('landings')->first() : NULL;
        return view('landing::backend.landing_setting.index', compact('landing_setting'));
    }

    public function update($landing)
    {
        $landing = Landing::find($landing);
        $landing->update($this->validateData());
        $this->uploadImage($landing);
        return redirect(config('landing.prefix', 'admin') . '/' . 'landing_setting');
    }



    private function validateData()
    {
        return tap(
            request()->validate(
                [
                    'landing_name' => 'max:100',
                    'landing_excerpt' => 'max:255',
                    'landing_about' => 'max:5000',
                    'landing_facebook' => 'max:255',
                    'landing_instagram' => 'max:255',
                    'landing_messenger' => 'max:255',
                    'landing_github' => 'max:255',
                    'landing_linkedin' => 'max:255',
                    'landing_email' => 'max:255',
                    'landing_patreon' => 'max:255',
                    'landing_google_map' => 'max:255',
                    'landing_location' => 'max:255',
                    'landing_contact' => 'max:255',
                    'landing_web_app' => 'max:255',
                    'landing_android_app' => 'max:255',
                    'landing_ios_app' => 'max:255',
                    'landing_documentation' => 'max:255',
                    'landing_trial' => 'max:255',
                    'landing_app_video' => 'max:255'
                ]
            ),
            function () {
                request()->has('landing_logo') ? request()->validate(['landing_logo' => 'sometimes|file|image|max:5000']) : '';
                request()->has('landing_favicon') ? request()->validate(['landing_favicon' => 'sometimes|file|image|max:3000',]) : '';
                request()->has('landing_app_img') ? request()->validate(['landing_app_img' => 'sometimes|file|image|max:5000',]) : '';
            }
        );
    }

    private function uploadImage($landing)
    {
        $this->makeImage($landing, 'landing_logo');
        $this->makeImage($landing, 'landing_favicon');
        $this->makeImage($landing, 'landing_app_img');
    }

    private function makeImage($landing, $field)
    {

        if (request()->has($field)) {
            $landing->update([
                $field => request()->file($field)->store('uploads/landing', 'public'),
            ]);

            $img = Image::make(request()->file($field)->getRealPath())->fit(500, 500);
            $img->save(public_path('storage/' . $landing->$field), 80);
        }
    }
}
