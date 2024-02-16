<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaController extends Controller
{
    public function berita() {
        return view("website.mediapublikasi.berita");
    }

    public function galeri() {
        return view("website.mediapublikasi.galeri");
    }

    public function peta() {
        return view("website.mediapublikasi.petarencana");
    }
}
