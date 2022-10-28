<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ActivityLogService;

class ActivityLogController extends Controller
{
    public function get_activity_log(User $user)
    {
        $activity_log = ActivityLogService::getActivityLog($user);

        return response()->json(['activity_log'=>[...$activity_log]]);
    }
}
