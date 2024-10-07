<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
    $log = '[' . now() . '] ' . $request->method() . ' ' . $request->url() . "\n";
    file_put_contents(storage_path('logs/log.txt'), $log, FILE_APPEND);
    return $next($request);
    }

}
