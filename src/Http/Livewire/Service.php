<?php

namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Service as Landing_Service;

class Service extends Component
{
    public function render()
    {
        $services = Landing_Service::all();
        return view('landing::frontend.livewire.service', compact('services'));
    }
}
