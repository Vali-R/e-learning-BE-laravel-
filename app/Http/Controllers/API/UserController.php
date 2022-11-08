<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::whereNot('email_verified_at', null);

        if ($request->search) {
            $user->search($request->search);
        }
        if ($request->sort) {
            $user->orderBy('id', $request->sort);
        }

        return UserResource::collection($user->with('is_followed')->get());
    }

    public function show(User $user)
    {
        return new UserResource(User::withCount(['followers', 'followings'])->with('is_followed')->find($user)->first());
    }
}
