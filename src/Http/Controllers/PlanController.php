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
    {
        Plan::create($this->validateData());
        return redirect(config('landing.prefix', 'admin') .  '/plan');
    }

    public function update(Plan $plan)
    {
        $plan->update($this->validateData());
        return redirect(config('landing.prefix', 'admin') .  '/plan');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect(config('landing.prefix', 'admin') .  '/plan');
    }

    private function validateData()
    {
        return request()->validate([
            'plan_name' => 'required|max:255',
            'plan_period' => 'required|numeric',
            'plan_price' => 'required|numeric',
            'plan_currency_symbol' => 'sometimes',
            'plan_color' => 'sometimes',
            'plan_services' => 'required'
        ]);
    }
}
