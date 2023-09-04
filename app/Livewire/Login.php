<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function authenticate()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/home');
        }


        session()->flash('error', 'Invalid credentials');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
