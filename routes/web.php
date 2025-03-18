<?php

use App\Http\Controllers\aduanController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\perizinanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SPController;
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
Route::controller(WebsiteController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(profileController::class)->group(function(){
    Route::get('/profile/sejarah', 'index')->name('sejarah');
    Route::get('/profile/moto', 'moto')->name('moto');
    Route::get('/profile/pejabat', 'pejabat')->name('pejabat');
    Route::get('/profile/sambutan', 'sambutan')->name('sambutan');
    Route::get('/profile/struktur', 'struktur')->name('struktur');
});

Route::controller(mediaController::class)->group(function(){
    Route::get('/media/galeri', 'galeri')->name('galeri');
    Route::get('/media/berita', 'berita')->name('berita');
    Route::get('/media/berita/{post}', 'show')->name('posts.berita');
    Route::get('/media/petarencana', 'peta')->name('peta');
});

Route::controller(perizinanController::class)->group(function(){
    Route::get('/pelayanan/perizinan', 'perizinan')->name('perizinan');
    Route::get('/pelayanan/perizinan/download/{id}',  'downloadFile')->name('perizinan.downloadFile');
});

Auth::routes();


Route::get('/auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard')->middleware('auth');
Route::resource('auth/posts', PostController::class);
Route::delete('/auth/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/auth/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/auth/posts/{id}', [PostController::class, 'update'])->name('posts.update');   
Route::resource('auth/SP', SPController::class);
Route::get('/auth/SP/download/{id}', [SPController::class, 'download'])->name('sp.download');
Route::delete('/auth/SP/delete/{id}', [SPController::class, 'destroy'])->name('sp.destroy');
Route::resource('/pelayanan/laporan', laporanController::class);
Route::resource('/auth/aduan', aduanController::class);

