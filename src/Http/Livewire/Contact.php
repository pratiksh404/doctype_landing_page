<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Landing;

class Contact extends Component
{
    public function render()
    {
        $landing = Landing::first(['landing_location', 'landing_contact', 'landing_email', 'landing_google_map']);
        return view('landing::frontend.livewire.contact', compact('landing'));
    }
}
