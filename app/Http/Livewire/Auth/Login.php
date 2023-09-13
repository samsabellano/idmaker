<?php

namespace App\Http\Livewire\Auth;

use App\Http\Requests\AuthRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected function rules()
    {
        return (new AuthRequest())->rules();
    }

    public function messages()
    {
        return (new AuthRequest())->messages();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        $this->validate();

        if (Auth::attempt(['username' => $this->username, 'password' => $this->password, 'is_active' => true])) {
            session()->regenerate();
            return redirect()->intended(RouteServiceProvider::SCHOOL_REDIRECT_URL);
        }

        $this->password = '';
        session()->flash('error', 'Invalid username or password. Try again.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}