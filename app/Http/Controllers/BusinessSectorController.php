<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner;
use Illuminate\Http\Request;

class BusinessSectorController extends Controller
{
    //
    public function index()
    {
        // id=1 se banner lo; na mile to default image use karo
        $banner = InnerBanner::find(1);
        $bannerImage = $banner?->image ?? 'assets/images/home/business.jpg';

        return view('Home.business-sectors', compact('bannerImage'));
    }
}
