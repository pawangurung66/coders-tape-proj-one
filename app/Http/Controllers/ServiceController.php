<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $services = \App\Models\Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $service = new \App\Models\Service();
        $service->name = request('name');   //Request funtion helps to get value of name from form.
        $service->save();
        // dd($service);    
        return redirect()->back();    
    }
}
