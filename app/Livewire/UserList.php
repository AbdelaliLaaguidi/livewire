<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[On('UserAdded')]
    public function render()
    {
        $users = User::latest()->paginate(4);
        return view('livewire.user-list', [
            'users' => $users,
        ]);
    }
}
