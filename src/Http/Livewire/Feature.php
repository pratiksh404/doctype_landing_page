<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Feature as Landing_Feature;

class Feature extends Component
{
    public function render()
    {
        $features = Landing_Feature::all();
        return view('landing::frontend.livewire.feature', compact('features'));
    }
}
