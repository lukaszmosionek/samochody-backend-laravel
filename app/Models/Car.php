<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'make',
        'model',
        'year',
        'price',
        'mileage',
        'location',
        'description',
        'status',
    ];

    protected $casts = [
        'year' => 'integer',
        'price' => 'decimal:2',
        'mileage' => 'integer',
    ];
}
