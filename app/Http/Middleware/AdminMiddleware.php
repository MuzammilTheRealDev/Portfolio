<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
                // Check if the user is authenticated
                if (Auth::check()) {
                    // Check if the authenticated user's type is 'Admin'
                    if (Auth::user()->user_type === 'Admin') {
                        return $next($request);
                    } else {
                        // Redirect non-admin users to the 'index' route
                        return redirect()->route('index');
                    }
                } else {
                    // Redirect unauthenticated users to the 'index' route
                    return redirect()->route('index');
                }
    }
}
