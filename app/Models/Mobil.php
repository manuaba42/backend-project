<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\Kendaraan;

class Mobil extends Kendaraan
{
    protected $connection = 'mongodb';
    protected $collection = 'mobils';
    
    protected $fillable = [
        'mesin',
        'kapasitas_penumpang',
        'tipe',
    ];
}
