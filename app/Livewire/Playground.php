<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Playground extends Component
{
    use WithPagination, WithFileUploads;

    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|unique:users|min:5|max:50')]
    public $email;

    #[Rule('required|min:5|max:50')]
    public $password;

    #[Rule('nullable|image|max:1024')]
    public $avatar;

    public function addRandomUser() {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'ABC',
            'avatar' => 'Image Placeholder'
        ]);

        $this->reset();

        request()->session()->flash('success', 'User created Successfully');
    }

    public function addUser() {

        $validated = $this->validate();

        $this->avatar ? $validated['avatar'] = $this->avatar->store('uploads', 'public') : $validated['avatar'] = 'Image Placeholder';

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'avatar' => $validated['avatar'],
        ]);

        $this->reset();

        request()->session()->flash('success', 'User created Successfully');
    }
    
    public function render()
    {
        $users = User::latest()->paginate(6);
        return view('livewire.playground', [
            'users' => $users,
        ]);
    }
}
