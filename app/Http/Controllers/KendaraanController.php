<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        // Ambil semua data kendaraan dari database
        $kendaraans = Kendaraan::all();

        // Kirim data ke view
        return view('datakendaraan', compact('kendaraans'));
    }
}
