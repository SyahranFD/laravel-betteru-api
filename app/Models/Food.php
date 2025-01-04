<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'kalori' => 'float',
        'lemak' => 'float',
        'protein' => 'float',
        'karbohidrat' => 'float',
        'time' => 'integer',
        'click_count' => 'integer',
    ];
}
