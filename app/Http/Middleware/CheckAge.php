<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age)
    {
        // Get the age from the session
        $userAge = $request->session()->get('age');

        // If user age is less than the required age, redirect
        if ($userAge < $age) {
            return redirect()->route('access-denied');
        }

        return $next($request);
    }
}

