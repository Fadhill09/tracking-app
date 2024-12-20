<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table = 'operators';

    protected $fillable = [
        'nama_operator',
        'operator',
        'email_operator',
        'nohp_operator',
        'alamat_operator',
        'password_operator',
    ];
}
