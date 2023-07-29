<?php

namespace App\Http\Middleware;

use App\Http\Traits\ActiveUserWithRole;
use Closure;
use Illuminate\Http\Request;

class AuthUser
{
    use ActiveUserWithRole;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        return $this->activeUserWithRoleMiddleware($request, $next, $role);
    }
}