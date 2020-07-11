<?php

namespace doctype_admin\Landing\Http\Controllers;

use doctype_admin\Landing\Models\Feature;
use Illuminate\Routing\Controller;

class FeatureController extends Controller
{
    public function index()
    {
        return view('landing::backend.landing_feature.index');
    }

    public function store(Request $request)
    {
        Feature::create($this->validateData());
        return redirect('/feature');
    }

    public function update(Feature $feature)
    {
        $feature->update($this->validateData());
        return redirect('/feature');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect('/feature');
    }

    private function validateData()
    {
        return tap(
            request()->validate([
                'feature_name' => 'required|max:255',
                'feature_about' => 'required|max:3000'
            ]),
            function () {
                request()->has('feature_image') ? request()->validate(['feature_image' => 'sometimes|file|image|max:5000']) : '';
            }
        );
    }
}
