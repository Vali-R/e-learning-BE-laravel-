<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityLogResource;
use App\Models\User;

class ActivityLogController extends Controller
{
    public function get_activity_log(User $user)
    {
        $activity_log = ActivityLogResource::collection($user->activity_logs()->with('relatable')->get());

        return response()->json(['activity_log' => [$activity_log]]);
    }
}
