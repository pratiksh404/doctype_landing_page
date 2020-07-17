<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Landing;

class Mobile extends Component
{
    public function render()
    {
        $landing = Landing::all(['landing_android_app', 'landing_ios_app']);
        return view('landing::frontend.livewire.mobile', compact('landing'));
    }
}
