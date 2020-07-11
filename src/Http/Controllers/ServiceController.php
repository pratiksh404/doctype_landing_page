<?php

namespace doctype_admin\Landing\Http\Controllers;

use doctype_admin\Landing\Models\Service;
use Illuminate\Routing\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('landing::backend.landing_service.index');
    }

    public function update(Request $request, Service $service)
    {
        $service->update($this->validateData());
        return redirect('/service');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/service');
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
