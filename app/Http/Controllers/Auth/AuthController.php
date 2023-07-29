<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\Logout;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use Logout;

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'is_active' => true])) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::SCHOOL_REDIRECT_URL);
        }

        return back()->onlyInput('username')->with('error', 'Invalid username or password. Please try again.');
    }
}