<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityLogResource;
use App\Models\User;

class ActivityLogController extends Controller
{
    public function getActivityLog(User $user)
    {
        $activity_log = ActivityLogResource::collection($user->activity_logs()->with('relatable', 'user')->get());

        return response()->json(['activity_log' => [$activity_log]]);
    }
}
