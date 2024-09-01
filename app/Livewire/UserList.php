<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Url(as: 's', history: true, keep: false)]
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
        return view('livewire.user-list')->title('Users List');
    }
}
