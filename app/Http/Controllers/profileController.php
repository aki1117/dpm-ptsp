<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index() {
        return view("website.profile.sejarah");
    }

    public function moto() {
        return view("website.profile.moto");
    }

    public function pejabat() {
        return view("website.profile.pejabat");
    }

    public function sambutan() {
        return view("website.profile.sambutan");
    }

    public function struktur() {
        return view("website.profile.struktur");
    }
}
