<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'city', 'private', 'date', 'items', 'image', 'price'];


    protected $casts = [
        'items' => 'array'
    ];

    // protected $dates = ['date'];
}
