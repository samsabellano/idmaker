<?php

namespace App\Http\Traits;

trait ActiveUserWithRole
{
    use Logout;

    public function activeUserWithRoleMiddleware($request, $next, $role)
    {
        $user = $request->user();

        return ($user && $user->is_active === true && in_array($user->role_id, $role))
            ? $next($request)
            : $this->logoutUser($request);
    }
}