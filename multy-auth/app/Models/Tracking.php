<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'trackings';
    protected $fillable = [
        'date',
        'keterangan',
        'deskripsi',
        'barang_id', 
        'foto', 
        'konfirmasi'
    ];

    public function getFotoUrlAttribute()
    {
        return asset('storage/' . $this->foto);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id'); 
    }
}



