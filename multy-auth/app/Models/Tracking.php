<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'trackings';

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
