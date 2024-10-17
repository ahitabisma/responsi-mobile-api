<?php

namespace App\Livewire\Buku;

use App\Models\buku\Status as BukuStatus;
use Livewire\Component;

class Status extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuStatus::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuStatus::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.status');
    }
}
