<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gps extends Model
{
    use HasFactory;

    protected $table = 'gps';

    protected $fillable = [
        'latitude',
        'longitude',
        'placa',
        'suben',
        'bajan',
        'linea',
    ];
}
