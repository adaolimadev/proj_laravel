<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Diz ao laravel que o atributo items será um arrray
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];
}
