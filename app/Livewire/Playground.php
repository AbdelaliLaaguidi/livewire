<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Playground extends Component
{
    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|unique:users|min:5|max:50')]
    public $email;

    #[Rule('required|min:5|max:50')]
    public $password;

    public function addRandomUser() {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'ABC',
        ]);

        request()->session()->flash('success', 'User created Successfully');
    }

    public function addUser() {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        request()->session()->flash('success', 'User created Successfully');
    }
    
    public function render()
    {
        $users = User::all();
        return view('livewire.playground', [
            'users' => $users,
        ]);
    }
}
