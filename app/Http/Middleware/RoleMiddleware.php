<?php

// app/Http/Middleware/RoleMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request); // Proceed if the user has the correct role
        }

        abort(403, 'you are Unauthorized for this page.'); // Deny access if the user doesn't have the required role
        
    }
}
