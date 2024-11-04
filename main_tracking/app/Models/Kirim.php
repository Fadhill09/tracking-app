<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirim extends Model
{
    use HasFactory;

    protected $table = 'pembelian'; // Mengubah nama tabel menjadi pembelian
    protected $primaryKey = 'id'; // Primary key tetap sama
    protected $fillable = ['seri', 'nama_barang', 'alamat', 'harga', 'ongkir']; // Mengubah kolom yang dapat diisi
}
