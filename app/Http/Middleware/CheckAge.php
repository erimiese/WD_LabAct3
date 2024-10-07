<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age)
    {
        $userAge = $request->session()->get('age'); // Get the age from the session

        if ($userAge < $age) {
            return redirect()->route('access-denied');
        }

        return $next($request);
    }
}
