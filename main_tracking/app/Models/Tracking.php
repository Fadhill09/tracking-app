<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    // Tentukan nama tabel jika berbeda dari nama default
    protected $table = 'trackings';

    // Izinkan kolom-kolom ini untuk diisi melalui mass assignment
    protected $fillable = [
        'nama_pengirim',
        'no_hp_pengirim',
        'alamat_pengirim',
        'nama_penerima',
        'no_hp_penerima',
        'alamat_penerima',
        'nama_barang',
        'jumlah_barang',
        'jenis_pengiriman',
        'biaya_pengiriman',
        'pesan_pengirim',
    ];
}
