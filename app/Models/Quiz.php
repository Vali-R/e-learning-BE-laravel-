<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->morphOne(ActivityLog::class, 'relatable');
    }

    public function user_lessons()
    {
        return $this->hasMany(UserLesson::class, 'quiz_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }

    public function user_answers()
    {
        return $this->hasMany(UserAnswer::class, 'quiz_id');
    }
}
