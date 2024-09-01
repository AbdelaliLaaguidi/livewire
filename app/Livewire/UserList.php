<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
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

    #[Computed()]
    public function users() {
        return User::latest()->where('name', 'LIKE', "%{$this->search}%")->paginate(4);
    }

    #[On('UserAdded')]
    public function render()
    {
        return view('livewire.user-list');
    }
}
