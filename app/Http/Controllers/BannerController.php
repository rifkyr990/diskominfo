<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $banner = Banner::all();
        return view('banner.index', compact('banner'));
    }
}
