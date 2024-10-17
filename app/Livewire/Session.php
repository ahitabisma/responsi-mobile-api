<?php

namespace App\Livewire;

use App\Models\Session as ModelsSession;
use Livewire\Component;

class Session extends Component
{
    public $sessions;

    public function mount()
    {
        $this->sessions = ModelsSession::orderBy('last_activity', 'desc')->get();
    }

    public function refresh()
    {
        $this->sessions = ModelsSession::orderBy('last_activity', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.session');
    }
}
