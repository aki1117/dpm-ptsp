<?php

use App\Http\Controllers\aduanController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\perizinanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Foundation\Auth\RegistersUsers;
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
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(profileController::class)->group(function () {
    Route::get('/profile/sejarah', 'index')->name('sejarah');
    Route::get('/profile/moto', 'moto')->name('moto');
    Route::get('/profile/pejabat', 'pejabat')->name('pejabat');
    Route::get('/profile/sambutan', 'sambutan')->name('sambutan');
    Route::get('/profile/struktur', 'struktur')->name('struktur');
});

Route::controller(mediaController::class)->group(function () {
    Route::get('/media/galeri', 'galeri')->name('galeri');
    Route::get('/media/berita', 'berita')->name('berita');
    Route::get('/media/berita/{post}', 'show')->name('posts.berita');
    Route::get('/media/petarencana', 'peta')->name('peta');
});

Route::controller(perizinanController::class)->group(function () {
    Route::get('/pelayanan/perizinan', 'perizinan')->name('perizinan');
    Route::get('/pelayanan/perizinan/download/{id}',  'downloadFile')->name('perizinan.downloadFile');
});
Route::resource('/pelayanan/laporan', laporanController::class);

Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/auth/register', [RegisterController::class, 'register']);
    Route::get('/auth/registerlist', [RegisterController::class, 'index'])->name('registerlist');
    Route::delete('/auth/registerlist/delete/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');
    Route::get('/auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');
    Route::resource('auth/SP', SPController::class);
    Route::resource('auth/posts', PostController::class);
    Route::resource('/auth/aduan', aduanController::class);
    Route::get('/auth/SP/download/{id}', [SPController::class, 'download'])->name('sp.download');
    Route::delete('/auth/SP/delete/{id}', [SPController::class, 'destroy'])->name('sp.destroy');
    Route::get('/auth/aduan/show', [aduanController::class, 'show'])->name('aduan.recap');
    Route::get('/local/auth/aduan/export/excel', [aduanController::class, 'exportExcel'])->name('aduan.export.excel');
    Route::get('/local/auth/aduan/export/pdf', [aduanController::class, 'exportPdfall'])->name('aduan.export.pdf');
    Route::get('/auth/aduan/show/{jenis}', [aduanController::class, 'aduanShow'])->name('aduan.stores');
    Route::get('/auth/aduan/show/{jenis}/excel', [aduanController::class, 'exportExcelByJenis'])->name('laporans.excel');
    Route::get('/auth/aduan/show/{jenis}/pdf', [aduanController::class, 'exportPdf'])->name('laporans.pdf');
});
