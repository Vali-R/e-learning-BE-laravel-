<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ACtivityLogService
{
    public static function getActivityLog($user)
    {
        $result=[];
        $logged_user_id=Auth::id();

        $activity_log = $user->activity_logs()->with('relatable')->get();

        if ($logged_user_id == $user->id) {
            $map= $activity_log->map(function ($item) {
                if (Str::contains($item->relatable_type, 'Quiz')) {
                    return collect(['activity'=>"You learned {$item->relatable->name}", 'timestamp'=>$item->updated_at]);
                } elseif (Str::contains($item->relatable_type, 'Follow')) {
                    return collect(['activity'=>"You followed {$item->relatable->following()->first()->first_name}", 'timestamp'=>$item->updated_at]);
                }
            });

            array_push($result, ...$map);
        } else {
            $map= $activity_log->map(function ($item) use ($user) {
                if (Str::contains($item->relatable_type, 'Quiz')) {
                    return collect(['activity'=>"{$user->first_name} learned {$item->relatable->name}", 'timestamp'=>$item->updated_at]);
                } elseif (Str::contains($item->relatable_type, 'Follow')) {
                    return collect(['activity'=>"{$user->first_name} followed {$item->relatable->following()->first()->first_name}", 'timestamp'=>$item->updated_at]);
                }
            });

            array_push($result, ...$map);
        }

        return $result;
    }
}
