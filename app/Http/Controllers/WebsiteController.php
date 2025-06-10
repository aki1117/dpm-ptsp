<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use App\Models\jenisLapor;

class WebsiteController extends Controller
{
    public function home(){
        $posts = post::where('is_publish', post::Published)->get();
        return view('website.index',['posts'=>$posts]);
    }

    public function create()
    {
        $laporans = jenisLapor::all();
        return view('website.laporan',['laporans'=>$laporans]);
    }

    public function contact() {
        return view("website.contact");
    }
}
