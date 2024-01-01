<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    return view('auth.login');
    // auth()->logout();
    // return 'home page';
});

Auth::routes();


Route::get('/auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dahsboard')->middleware('auth');
Route::resource('auth/posts', PostController::class);

