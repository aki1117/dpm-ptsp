<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use App\Models\jenisLapor;

class WebsiteController extends Controller
{
    public function home(){
        $laporans = jenisLapor::all();
        // return view('auth/posts/create')->with('categories', $categories);
        return view('website.index',['laporans'=>$laporans]);
    }

    public function create()
    {
        $laporans = jenisLapor::all();
        // return view('auth/posts/create')->with('categories', $categories);
        return view('website.laporan',['laporans'=>$laporans]);
    }
}
