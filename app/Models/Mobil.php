<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mobil extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mobils';
    
    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
        'mesin',
        'kapasitas_penumpang',
        'tipe',
        'stok'
    ];
}
