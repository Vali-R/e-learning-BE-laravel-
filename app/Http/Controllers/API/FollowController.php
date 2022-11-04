<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Unfollow;
use App\Models\User;
use App\Services\ActivityLogService;

class FollowController extends Controller
{
    public function update_or_create(User $user)
    {
        $logged_user_id = auth()->id();
        $existing_flag = $user->followers()->whereFollowerId($logged_user_id)->first()?->flag;
        $operation = $existing_flag ? 'unfollowed' : 'followed';

        $follow = Follow::updateOrCreate(
            ['follower_id' => $logged_user_id, 'following_id' => $user->id],
            ['flag' => !$existing_flag ?? true],
        );

        $unfollow = fn () => Unfollow::updateOrCreate(['unfollower_id' => $logged_user_id, 'unfollowing_id' => $user->id]);

        $existing_flag ? ActivityLogService::createActivity($unfollow()) : ActivityLogService::createActivity($follow);

        return response()->json(['message' => "Succesfully $operation"]);
    }
}
