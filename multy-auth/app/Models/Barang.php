<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model

{
    protected $table = 'barangs';
    protected $fillable = [
        'date',
        'keterangan',
        'deskripsi',
    ];

    public function tracking()
    {
        return $this->belongsTo(Tracking::class, 'tracking_id');
    }

}
