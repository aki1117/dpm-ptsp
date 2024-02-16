<?php

use App\Http\Controllers\aduanController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\perizinanController;
use App\Http\Controllers\profileController;
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
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/profile/sejarah', [profileController::class,'index'])->name('sejarah');
Route::get('/profile/moto', [profileController::class,'moto'])->name('moto');
Route::get('/profile/pejabat', [profileController::class,'pejabat'])->name('pejabat');
Route::get('/profile/sambutan', [profileController::class,'sambutan'])->name('sambutan');
Route::get('/profile/struktur', [profileController::class,'struktur'])->name('struktur');
Route::get('/media/galeri', [mediaController::class,'galeri'])->name('galeri');
Route::get('/media/berita', [mediaController::class,'berita'])->name('berita');
Route::get('/media/petarencana', [mediaController::class,'peta'])->name('peta');
Route::get('/pelayanan/perizinan', [perizinanController::class,'perizinan'])->name('perizinan');

Auth::routes();


Route::get('/auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dahsboard')->middleware('auth');
Route::resource('auth/posts', PostController::class);
Route::resource('/pelayanan/laporan', laporanController::class);
Route::resource('/auth/aduan', aduanController::class);

