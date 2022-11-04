<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;
use App\Services\ActivityLogService;

class FollowController extends Controller
{
    public function toggleFollow(User $user)
    {
        $logged_user_id = auth()->id();
        $existing_flag = $user->followers()->whereFollowerId($logged_user_id)->first()?->flag;
        $operation = $existing_flag ? 'unfollowed' : 'followed';

        $follow = Follow::updateOrCreate(
            ['follower_id' => $logged_user_id, 'following_id' => $user->id],
            ['flag' => !$existing_flag ?? true],
        );

        $existing_flag ? ActivityLogService::createActivity($follow, 'unfollow') : ActivityLogService::createActivity($follow, 'follow');

        return response()->json(['message' => "Succesfully $operation"]);
    }
}
