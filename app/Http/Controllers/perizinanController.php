<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SP;
use Illuminate\Support\Facades\Storage;

class perizinanController extends Controller
{
    public function perizinan() {
        $posts = SP::all();
        return view('website.pelayanan.perizinan',['posts' => $posts]);
    }

   
    public function downloadFile($id){
        $path = SP::where("id", $id)->value("path");
        return Storage::download($path, $userShownFileName);
    }
}
