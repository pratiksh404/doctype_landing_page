<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Landing;
use doctype_admin\Landing\Models\Contact as Landing_Contact;

class Contact extends Component
{
    public $contact_name;
    public $contact_email;
    public $contact_subject;
    public $contact_message;


    public function addContactMsg()
    {
        Landing_Contact::create($this->validateData());
        return redirect('/contact');
    }

    public function validateData()
    {
        $this->validate([
            'contact_name' => 'required|max:100',
            'contact_email' => 'required|email',
            'contact_subject' => 'required|max:100',
            'sontact_message' => 'required|max:2000'
        ]);
    }
    public function test()
    {
        dd('test');
    }

    public function render()
    {
        $landing = Landing::first(['landing_location', 'landing_contact', 'landing_email', 'landing_google_map']);
        return view('landing::frontend.livewire.contact', compact('landing'));
    }
}
