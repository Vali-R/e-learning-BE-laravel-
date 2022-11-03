<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return new UserResource(User::withCount(['followers', 'followings'])->with('is_followed')->find($user)->first());
    }
}
