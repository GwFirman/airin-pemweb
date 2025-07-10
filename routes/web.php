<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\meteranController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\pemakaianController;
use App\Http\Controllers\PendaftaranTryoutController;
use App\Http\Controllers\tagihanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require('auth.php');

/* 
 * Tidak bisa diakses jika sudah login.
 */
Route::middleware('guest')->group(function () {
    Route::get('/', fn() => view('landing'))->name('landing');
});

/* 
 * Perlu login untuk mengakses
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // proses bisnis
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('layanan', layananController::class);
    Route::resource('meteran', meteranController::class);
    Route::resource('pemakaian', pemakaianController::class);
    Route::resource('tagihan', tagihanController::class);
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
