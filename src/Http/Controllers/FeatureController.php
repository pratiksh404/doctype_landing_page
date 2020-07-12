<?php

namespace doctype_admin\Landing\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\Facades\Image as Image;
use doctype_admin\Landing\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('landing::backend.landing_feature.index', compact('features'));
    }

    public function store(Request $request)
    {
        $feature = Feature::create($this->validateData());
        $this->uploadImage($feature);
        return redirect(config('landing.prefix', 'admin') . '/' . 'feature');
    }

    public function update(Feature $feature)
    {
        $feature->update($this->validateData());
        $this->uploadImage($feature);
        return redirect('/feature');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect(config('landing.prefix', 'admin') . '/' . 'feature');
    }

    private function validateData()
    {
        return tap(
            request()->validate([
                'feature_name' => 'required|max:255',
                'feature_about' => 'required|max:3000',
                'feature_image' => 'sometimes|file|image|max:5000'
            ]),
            function () {
                request()->has('feature_image') ? request()->validate(['feature_image' => 'sometimes|file|image|max:5000']) : '';
            }
        );
    }

    private function uploadImage($feature)
    {
        if (request()->has('feature_image')) {
            $feature->update([
                'feature_image' => request()->feature_image->store('uploads/landing/feature', 'public')
            ]);
            $feature_img = Image::make(request()->file('feature_image')->getRealPath())->fit(800, 600);
            $feature_img->save(public_path('storage/' . $feature->feature_image), 80);
        }
    }
}
