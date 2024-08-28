<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->middleware('checklogin');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi route lainnya dengan middleware 'checklogin'
Route::middleware(['checklogin'])->group(function () {
    Route::get('/data-kendaraan', [KendaraanController::class, 'index']);
    Route::get('/laporan-pemeliharaan', function () {
        return view('laporanpemeliharaan');
    });
    Route::get('/show-info', function () {
        return view('showinfo');
    });
});
