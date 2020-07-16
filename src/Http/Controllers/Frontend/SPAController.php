<?php

namespace doctype_admin\Landing\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;

class SPAController extends Controller
{
    public function home()
    {
        return view('landing::frontend.index');
    }

    public function contact()
    { }

    public function projects()
    { }
}
