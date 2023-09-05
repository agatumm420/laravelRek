<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ManageUsers extends Component
{
    public $name, $surname, $email, $role;

    public function createUser()
    {
        User::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'role' => $this->role,
        ]);
    }

    public function render()
    {
        return view('livewire.manage-users', ['users' => User::all()]);
    }
}
