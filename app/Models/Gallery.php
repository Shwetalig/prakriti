<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
   
    protected $fillable = [
        'title',
        'description',
        'images', // Assuming 'images' is the column storing image paths
    ];

    protected $casts = [
        'images' => 'array', // Casting 'images' column to array
    ];
}
