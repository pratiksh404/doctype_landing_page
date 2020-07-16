<?php


namespace doctype_admin\Landing\Http\Livewire;

use doctype_admin\Landing\Models\Landing;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $landing = Landing::first(['landing_about', 'landing_facebook', 'landing_instagram', 'landing_messenger', 'landing_github', 'landing_linkedin', 'landing_email', 'landing_patreon']);
        return view('landing::frontend.livewire.footer', compact('landing'));
    }
}
