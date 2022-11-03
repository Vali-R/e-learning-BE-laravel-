<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    // Scopes

    public function scopeCorrect($query)
    {
        return $query->where('correct', true);
    }
}
