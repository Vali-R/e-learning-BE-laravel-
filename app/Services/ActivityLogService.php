<?php

namespace App\Services;

class ActivityLogService
{
    public static function createActivity($model)
    {
        $model->activity()->create(['user_id' => auth()->id()]);
    }
}
