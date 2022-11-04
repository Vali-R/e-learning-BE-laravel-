<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;

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

        $follow->activity()->create(['user_id' => $logged_user_id, 'title' => $existing_flag ? 'unfollow' : 'follow']);

        return response()->json(['message' => "Succesfully $operation"]);
    }
}
