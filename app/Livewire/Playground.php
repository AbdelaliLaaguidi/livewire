<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Playground extends Component
{
    public $name;
    public $email;
    public $password;

    public function addRandomUser() {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'ABC',
        ]);
    }

    public function addUser() {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
    
    public function render()
    {
        $users = User::all();
        return view('livewire.playground', [
            'users' => $users,
        ]);
    }
}
