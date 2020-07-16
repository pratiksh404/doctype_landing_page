<?php


namespace doctype_admin\Landing\Http\Livewire;

use Livewire\Component;
use doctype_admin\Landing\Models\Plan as Landing_Plan;

class Plan extends Component
{
    public function render()
    {
        $plans = Landing_Plan::all();
        return view('landing::frontend.livewire.plan', compact('plans'));
    }
}
