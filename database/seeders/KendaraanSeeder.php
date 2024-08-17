<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan; // Pastikan model ini ada dan sudah benar

class KendaraanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'nama_kendaraan' => 'Mobil bunda',
            'plat_kendaraan' => 'B 2005 BV',
            'koordinat_lokasi_terkini' => '-6.9730017,107.627072', // Contoh koordinat
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
