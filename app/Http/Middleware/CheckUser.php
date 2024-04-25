<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
           // If not authenticated, redirect to the login page
            return redirect()->route('login');
        }

        return $next($request);
    }
}
