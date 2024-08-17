<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

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
    return view('index');
});

// Route untuk menampilkan data kendaraan
Route::get('/data-kendaraan', [KendaraanController::class, 'index']);


Route::get('/laporan-pemeliharaan', function () {
    return view('laporanpemeliharaan');
});

Route::get('/show-info', function () {
    return view('showinfo');
});