<?php

namespace App\Http\Middleware;

use Closure;

class SessionMiddleware
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

        $route = $request->path();
        $route = explode("/", $route);

        if(!session("username"))
        {
            if($route[0] == "product"
                ||$route[0] == "product_delete"
                ||$route[0] == "add_product"
                ||$route[0] == "save_product")
            {
                return redirect("login_form");
            }
        }
        else
        {
            return $next($request);
        }
        
    }
}
