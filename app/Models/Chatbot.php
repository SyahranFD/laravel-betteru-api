<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chatbot()
    {
        return $this->hasMany(Chatbot::class);
    }
}
