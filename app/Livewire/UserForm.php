<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserForm extends Component
{
    use WithFileUploads;
    
    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|min:8|max:50')]
    public $email;

    #[Rule('required|min:8|max:50')]
    public $password;

    #[Rule('nullable|image|max:1024')]
    public $avatar;

    public function addUser() {
        $validated = $this->validate();

        if($this->avatar) {
            $validated['avatar'] = $this->avatar->store('uploads', 'public');
        } else {
            $validated['avatar'] = 'uploads/Profile_avatar_placeholder_large.png';
        }

        User::create($validated);

        $this->reset();

        return $this->redirect('/users', navigate: true);
    }

    public function render()
    {
        return view('livewire.user-form')->title('User Form');
    }
}
