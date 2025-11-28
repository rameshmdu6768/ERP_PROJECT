<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $name = $request->query('name');

        if ($name === 'Ramesh') {
            return $next($request);
        }

        // return response("Access denied for $name", 403);

        return response()->view('notallowed_page');

    }
}
