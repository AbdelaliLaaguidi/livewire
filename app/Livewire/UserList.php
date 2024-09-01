<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public function placeholder() {
        return view('livewire.placeholder');
    }

    #[On('UserAdded')]
    public function render()
    {
        sleep(3);

        $users = User::latest()->paginate(4);

        return view('livewire.user-list', [
            'users' => $users,
        ]);
    }
}
