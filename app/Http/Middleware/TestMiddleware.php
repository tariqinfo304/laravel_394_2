<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        echo "Test Milddeware";
        return $next($request);
    }

    //the terminate method will automatically be called after the response is sent to the browser:
    function terminate($req,$res)
    {
        //dd($res);
    }
}
