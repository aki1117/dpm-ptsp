<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perizinanController extends Controller
{
    public function perizinan() {
        return view("website.pelayanan.perizinan");
    }
}
