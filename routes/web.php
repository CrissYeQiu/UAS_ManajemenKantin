<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route untuk daftar dan masuk
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.auth');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');
});

// Group 2: Isolasi Keamanan Khusus untuk Pengguna yang Telah Sukses Terautentikasi
Route::middleware(['auth'])->group(function () {
    // Penanganan Aksi Keluar Aplikasi
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
