<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
       public function index()
    {
        // $banner = InnerBanner::find(7);

        // $bannerImage = $banner?->image ?? 'assets/images/home/about.jpg';

        return view('Home.about');
    }
}
