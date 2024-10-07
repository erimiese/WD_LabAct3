<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $minAge
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $minAge = 18)
    {
        // Ensure we are not applying the check to /check-age or /access-denied routes
        if ($request->is('check-age') || $request->is('access-denied')) {
            return $next($request);
        }

        // Check if age is provided in the request
        if (!$request->has('age')) {
            return redirect('/check-age');
        }

        // Check if age meets the minimum age requirement
        if ($request->age < $minAge) {
            return redirect('access-denied');
        }

        return $next($request);
    }
}
