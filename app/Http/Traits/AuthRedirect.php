<?php

namespace App\Http\Traits;

use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

trait AuthRedirect
{
    public function redirectAuthenticatedUser()
    {
        if (Auth::check()) {
            return match (Auth::user()->role_id) {
                Role::SUPER_ADMIN => redirect()->intended(RouteServiceProvider::CONNICT_URL)
            };
        }
    }
}