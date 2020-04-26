<?php

namespace App\Http\Middleware;

use Closure;

class Employee
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
        if( auth()->user()->is_employee == 1 )
        {
            return $next($request);
        }
        else
        {
            return redirect('home')->with('error', 'You don\'t have employee access');
        }
    }
}
