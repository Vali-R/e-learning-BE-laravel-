<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unfollow extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function activity()
    {
        return $this->morphOne(ActivityLog::class, 'relatable');
    }

    public function unfollowing()
    {
        return $this->belongsTo(User::class, 'unfollowing_id');
    }
}
