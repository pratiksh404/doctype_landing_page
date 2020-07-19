<?php

namespace doctype_admin\Landing\Http\Controllers;



use doctype_admin\Landing\Models\Contact;
use Illuminate\Routing\Controller;

class ContactController extends Controller

{
    public function __invoke()
    {
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return view('landing::backend.landing_contact.index', compact('contacts'));
    }
}
