<?php

namespace App\Http\Controllers;
use App\Models\Service;


class ServicesController extends Controller
{



 public function index()
    {


        return view('Home.services');
    }


    // public function show(Service $service)
    // {
    //     abort_unless($service->is_active, 404);

    //     $banner = InnerBanner::find(9);

    //     return view('Home.service_show', compact('service','banner'));
    // }

     public function show(Service $service)
    {
        abort_unless($service->is_active, 404);

        // sidebar list
        $servicesMenu = Service::active()->ordered()->select('title','slug')->get();

        return view('Home.service_show', compact('service','servicesMenu'));
    }
}
