<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUser extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->users = User::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.list-user');
    }
}
