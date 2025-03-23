<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\lapor;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $date = \Carbon\Carbon::today()->subDays(7);
        $postCount = Post::where('created_at','>=',$date)->count();
        $aduanCount = Lapor::where('created_at','>=',$date)->count();
        $userCount = User::where('created_at','>=',$date)->count();
        
        return view('auth.dashboard', compact('postCount', 'aduanCount', 'userCount'));
    }

    public function index() {
        $user = Auth::user();
        return view('layouts.auth', ['user' => $user]);
    }
}
