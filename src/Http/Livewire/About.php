<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Landing;

class About extends Component
{
    public function render()
    {
        $landing = Landing::first(['landing_name', 'landing_excerpt', 'landing_about', 'landing_app_img', 'landing_app_video']);
        return view('landing::frontend.livewire.about', compact('landing'));
    }
}
