<?php

namespace doctype_admin\Landing\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use doctype_admin\Landing\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('landing::backend.landing_service.index', compact('services'));
    }

    public function store(Request $request)
    {
        Service::create($this->validateData());
        Alert::success('Landing Service Created', 'Success');
        return redirect(config('landing.prefix', 'admin') . '/service');
    }

    public function update(Request $request, Service $service)
    {
        $service->update($this->validateData());
        Alert::info('Landing Service Updated', 'Success');
        return redirect(config('landing.prefix', 'admin') .  '/service');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        Alert::error('Landing Service Deleted', 'Success');
        return redirect(config('landing.prefix', 'admin') . '/service');
    }

    private function validateData()
    {
        return request()->validate([
            'service_name' => 'required|max:255',
            'service_excerpt' => 'required|max:255',
            'service_icon' => 'required|max:255'
        ]);
    }
}
