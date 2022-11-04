<?php

namespace App\Services;

class ActivityLogService
{
    public static function createActivity($model, $title)
    {
        $model->activity()->create(['user_id' => auth()->id(), 'title' => $title]);
    }
}
