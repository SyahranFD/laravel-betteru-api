<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyWater extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'amount' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
