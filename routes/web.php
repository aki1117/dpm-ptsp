<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\WebsiteController;
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

// Route::get('/', function () {
    
//     return view('website.index');
//     // auth()->logout();
//     // return 'home page';
// });

Route::get('/', [WebsiteController::class,'home'])->name('home');


Auth::routes();


Route::get('/auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dahsboard')->middleware('auth');
Route::resource('auth/posts', PostController::class);
Route::resource('/laporan', laporanController::class);

