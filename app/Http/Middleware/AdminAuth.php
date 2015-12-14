<?php

namespace Xjson\Http\Middleware;

use Closure;
use Xjson\User;

class AdminAuth
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
        \Auth::login(User::whereId(1)->first());
        return $next($request);
    }
}
