<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ProviderAuth
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
        $user = Auth::user();
        //dd($user->isProvider());        
        if(!$user||!$user->isProvider()){
            return redirect(route("register"));
        }
        return $next($request);
    }
}
