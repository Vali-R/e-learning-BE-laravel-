<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    // Scopes

    public function scopeIsCorrect($query, $value)
    {
        return $query->where('correct', $value);
    }
}
