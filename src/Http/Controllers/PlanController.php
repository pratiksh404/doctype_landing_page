<?php

namespace doctype_admin\Landing\Http\Controllers;

use doctype_admin\Landing\Models\Plan;
use Illuminate\Routing\Controller;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('landing::backend.landing_plan.index', compact('plans'));
    }

    public function store()
    { }

    public function update()
    { }

    public function destroy()
    { }

    private function validateData()
    { }
}
