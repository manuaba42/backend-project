<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\Kendaraan;

class Motor extends Kendaraan
{
    protected $connection = 'mongodb';
    protected $collection = 'motors';
    
    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
    ];
}
