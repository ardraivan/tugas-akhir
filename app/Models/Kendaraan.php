<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'kendaraan';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_kendaraan',
        'plat_kendaraan',
        'koordinat_lokasi_terkini',
    ];

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = [];

    // Format tanggal
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
