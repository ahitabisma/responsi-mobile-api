<?php

namespace App\Livewire\Buku;

use App\Models\buku\Penulis as BukuPenulis;
use Livewire\Component;

class Penulis extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuPenulis::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuPenulis::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.penulis');
    }
}
