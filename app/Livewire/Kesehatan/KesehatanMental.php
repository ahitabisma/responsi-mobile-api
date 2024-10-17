<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\KesehatanMental as KesehatanKesehatanMental;
use Livewire\Component;

class KesehatanMental extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanKesehatanMental::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanKesehatanMental::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.kesehatan-mental');
    }
}
