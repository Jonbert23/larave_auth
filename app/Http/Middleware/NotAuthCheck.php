<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class NotAuthCheck
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            return redirect()->back();
        }
        else
        {
            return $next($request);
        }

    }
}
