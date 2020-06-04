<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
        }

        if ($user == null || $user->role->id != 2) {
            return redirect('/test/home');
        }
        return $next($request);
    }
}
