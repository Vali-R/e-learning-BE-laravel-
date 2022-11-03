<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string|min:1',
            'last_name' => 'required|string|min:1',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create($attributes);

        event(new Registered($user));

        return response(['message' => "User's successfully created"], 201);
    }
}
