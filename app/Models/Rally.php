<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rally extends Model
{
    use HasFactory;

    protected $table = 'rallies';

    protected $fillable = [
        'noRally',
        'Campo',
        'Fecha',
        'Periodo'
    ];

}
