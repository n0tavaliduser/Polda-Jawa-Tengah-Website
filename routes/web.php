<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryphotoController;
use App\Http\Controllers\GalleryvideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\PoldaController;
use App\Http\Controllers\SkckController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Frontends website Polda Jawa Tengah
Route::get('/', [PoldaController::class, 'index'])->name('frontend-home');
Route::get('/photo', [PoldaController::class, 'photo'])->name('frontend-photo');
Route::get('/video', [PoldaController::class, 'video'])->name('frontend-video');
Route::get('/news', [PoldaController::class, 'news'])->name('frontend-news');
Route::get('/news/{slug}', [PoldaController::class, 'news_read_more'])->name('news-read-more');
Route::get('/official', [PoldaController::class, 'official'])->name('frontend-official');
Route::get('/contact', [PoldaController::class, 'contact'])->name('frontend-contact');

// Route Dashboard untuk semua admin Polda
Route::middleware('role:multimediamanager,skckmanager,sdm')->group( function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::resource('/home', HomeController::class);

// Polda Jawa Tengah Multimedia Routing
Route::middleware('role:multimediamanager')->group( function() {
    Route::get('/home-show', [HomeController::class, 'show'])->name('home-show');
    Route::resource('/galleryphoto', GalleryphotoController::class);
    Route::resource('/galleryvideo', GalleryvideoController::class);
    Route::resource('/newsmanager', NewsController::class);
    Route::resource('/officialmanager', OfficialController::class);
});

Route::resource('/contactmanager', ContactController::class);

// Polda Jawa Tengah SDM Routing
Route::middleware('role:sdm')->group( function() {
    Route::resource('/webuser', UserController::class);
});

// Polda Jawa Tengah Skck Manager Routing
Route::middleware('role:skckmanager')->group( function() {
    Route::resource('/skckmanager', SkckController::class);
});

// Pengajuan SKCK
Route::get('/skckmanager/create', [SkckController::class, 'create'])->name('skckmanager.create')->middleware('role:masyarakat,multimediamanager,skckmanager');
Route::post('/skckmanager', [SkckController::class, 'store'])->name('skckmanager.store')->middleware('role:masyarakat');

// Role Alert
Route::get('/role-alert', function() {
    return view('backends.role-alert');
})->name('role-alert');