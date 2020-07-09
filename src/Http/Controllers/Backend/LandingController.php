<?php

namespace doctype_admon\Landing\Http\Controllers\Backend;

use doctype_admon\Landing\Models\Landing;
use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $spa = Landing::all();
        return view('landing:landing_setting.index', compact('landing'));
    }

    public function update(Request $request, Landing $landing)
    {
        $landing->update($this->validateData());
        $this->uploadImage($landing);
        return redirect('/landing_setting');
    }

    public function delete(Landing $landing)
    {
        $landing->delete();
        return redirect('/landing_setting');
    }

    private function validateData()
    {
        return tap(
            request()->validate(
                [
                    'landing_name' => 'required|max:100',
                    'landing_excerpt' => 'required|max:255',
                    'landing_about' => 'required|max:5000',
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
                ]
            ),
            function () {
                request()->has('landing_logo') ? request()->validate(['landing_logo' => 'sometimes|file|image|max:5000']) : '';
                request()->has('landing_favicon') ? request()->validate(['landing_favicon' => 'sometimes|file|image|max:3000',]) : '';
                request()->has('landing_app_img') ? request()->validate(['landing_app_img' => 'sometimes|file|image|max:5000',]) : '';
                request()->has('landing_app_video') ? request()->validate(['landing_app_video' => 'sometimes|file|image|max:5000',]) : '';
            }
        );
    }

    private function uploadImage($landing)
    { }
}
