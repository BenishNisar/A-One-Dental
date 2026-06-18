<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner; // << import

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    //
        public function index()
    {
        // inner_banners table se id = 3 (ya jo aap chaho) ka banner
        $banner = InnerBanner::find(3);

        // fallback agar record/image na ho
        $bannerImage = $banner?->image ?: 'assets/images/home/software.jpg';

        return view('Home.softwares', compact('bannerImage'));
    }
}
