<?php

namespace doctype_admin\Landing\Http\Controllers\Frontend;

use doctype_admin\Landing\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SPAController extends Controller
{
    public function home()
    {
        return view('landing::frontend.index');
    }

    public function about()
    {
        return view('landing::frontend.about');
    }

    public function contact()
    {
        return view('landing::frontend.contact');
    }

    public function saveContact(Request $request)
    {
        Contact::create($this->contactValidate());
        Alert::success('Message Send ! Thank you', 'We will be in touch.');
        return redirect('/contact');
    }

    public function contactValidate()
    {
        return request()->validate([
            'contact_name' => 'required|max:100',
            'contact_email' => 'required|email|max:100',
            'contact_subject' => 'required|max:100',
            'contact_message' => 'required:max:2000'
        ]);
    }
}
