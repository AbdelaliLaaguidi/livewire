<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;

    public function placeholder() {
        return view('livewire.placeholder');
    }

    public function update() {
        
    }

    #[On('UserAdded')]
    public function render()
    {
        $users = User::latest()->where('name', 'LIKE', "%{$this->search}%")->paginate(4);

        return view('livewire.user-list', [
            'users' => $users,
        ]);
    }
}
