<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // If not authenticated, abort with 401 Unauthorized
            abort(401, 'Unauthorized');
        }

        // Fetch the authenticated user
        $user = Auth::user();

        // Check if the user's role matches the required role
        if ($user->role !== 'customer') {
            // If the role does not match, abort with 403 Forbidden
            abort(403, 'Forbidden');
        }

        return $next($request);
    }
}