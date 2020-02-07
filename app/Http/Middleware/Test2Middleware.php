<?php

namespace App\Http\Middleware;

use Closure;

class Test2Middleware
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
        echo "Test2 Middleware";
        return $next($request);
    }
}
