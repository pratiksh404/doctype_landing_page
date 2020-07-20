<?php

namespace doctype_admin\Landing\Http\Controllers;

use doctype_admin\Landing\Models\Plan;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Landing Plan Created', 'Success');
        return redirect(config('landing.prefix', 'admin') .  '/plan');
    }

    public function edit(Plan $plan)
    {
        return view('landing::backend.landing_plan.edit', compact('plan'));
    }

    public function update(Plan $plan)
    {
        $plan->update($this->validateData());
        Alert::info('Landing Plan Updated', 'Success');
        return redirect(config('landing.prefix', 'admin') .  '/plan');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        Alert::error('Landing Plan Deleted', 'Success');
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
