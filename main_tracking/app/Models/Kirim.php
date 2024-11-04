<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirim extends Model
{
    use HasFactory;

    protected $table = 'pembelian'; // Mengubah nama tabel menjadi pembelian
    protected $primaryKey = 'id'; // Primary key tetap sama
    protected $fillable = ['nama_pengguna', 'alamat', 'harga', ]; // Mengubah kolom yang dapat diisi
}
