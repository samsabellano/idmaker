<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Traits\AuthRedirect;
use App\Http\Traits\Logout;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use Logout, AuthRedirect;

    public function index()
    {
        return $this->redirectAuthenticatedUser() ?: view('auth.login');
    }

    public function logout(Request $request)
    {
        return $this->logoutUser($request);
    }
}