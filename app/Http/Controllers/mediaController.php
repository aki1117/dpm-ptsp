<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;
class mediaController extends Controller
{
    public function show(Post $post) {
        return view("website.mediapublikasi.berita", ["post"=> $post]);
    }

    public function galeri() {
        return view("website.mediapublikasi.galeri");
    }

    public function berita() {
        $posts =  post::where('is_publish', post::Published)->simplePaginate(3);
        return view("website.mediapublikasi.beritahome", ["posts"=> $posts]);
    }

    public function peta() {
        return view("website.mediapublikasi.petarencana");
    }
}
