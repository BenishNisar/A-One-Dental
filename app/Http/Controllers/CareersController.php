<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner; // ⬅️ add this

use Illuminate\Http\Request;

class CareersController extends Controller
{
    //
       public function index()
    {
        // inner_banners: id = 1  (change if you want another record)
        $banner = InnerBanner::find(1);

        // fallback if record/image missing
        $bannerImage = $banner?->image ?? 'assets/images/home/careers.jpg';

        return view('Home.careers', compact('bannerImage'));
    }
}
