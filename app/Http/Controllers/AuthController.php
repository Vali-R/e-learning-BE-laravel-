<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $attributes = $request->validate([
            'first_name'=>'required|string|min:1',
            'last_name'=>'required|string|min:1',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6',
        ]);


        User::create($attributes);

        return response(["message"=>"User's successfully created"], 201);
    }
}
