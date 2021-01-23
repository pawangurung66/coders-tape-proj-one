<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        // $services = [
        //     'first_name'  =>   'pawan',
        //     'last_name'  =>   'gurung',
        // ];

        $services = \App\Service::all();

        return view('services', compact('services'));
    }
}
