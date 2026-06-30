<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StokController;

Route::get('/', function () {
    return view('landingpage');
});

// Menu
Route::get('/menu', function () {
    return view('menu.index');
});

// Akun Quest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.auth');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');
});


// auetntikasi user logout
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Menu
Route::resource('menu', MenuController::class);

// Stok
Route::resource('stok', StokController::class);

// Route Karyawan
Route::resource('/karyawan', KaryawanController::class);