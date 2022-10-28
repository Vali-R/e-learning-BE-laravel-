<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|null
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if ($request->user()) {
            if (! $request->user() ||
                ($request->user() instanceof MustVerifyEmail &&
                ! $request->user()->hasVerifiedEmail())) {
                return response()->json(['message' => 'Your email address is not verified.'], 409);
            }
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user && !$user->hasVerifiedEmail()) {
                return response()->json(['message' => 'Your email address is not verified.'], 409);
            }
        }

        return $next($request);
    }
}
