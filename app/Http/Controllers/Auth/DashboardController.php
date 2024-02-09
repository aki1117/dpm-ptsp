<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('auth.dashboard');
    }

    public function index() {
        $user = Auth::user();
        return view('layouts.auth', ['user' => $user]);
    }
}
