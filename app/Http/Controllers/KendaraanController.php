<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
// use Kreait\Firebase\Database;
use Kreait\Firebase\Contract\Database;

class KendaraanController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function index()
    {
        $data = $this->database->getReference('kendaraan')->getValue();


        $kendaraan = [
            'nama' => $data['nama'] ?? 'Unknown',
            'plat' => $data['plat'] ?? 'Unknown',
            'latitude' => $data['latitude'] ?? 0.0,
            'longitude' => $data['longitude'] ?? 0.0,
        ];
    
        return view('datakendaraan', ['kendaraan' => $kendaraan]);
    }
}
