<?php

namespace doctype_admin\Landing\Http\Livewire;

use doctype_admin\Landing\Models\Landing;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        $landing = Landing::first(['landing_name', 'landing_excerpt', 'landing_app_img', 'landing_app_video', 'landing_documentation']);
        return view('landing::frontend.livewire.banner', compact('landing'));
    }
}
