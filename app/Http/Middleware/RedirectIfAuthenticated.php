<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = Auth::user();
        if (Auth::guard($guard)->check()) {
            if($user->user_type==1){
                redirect(route("customers"));
            }else {
                redirect(route("providers"));
            }
            
        }

        return $next($request);
    }
}
