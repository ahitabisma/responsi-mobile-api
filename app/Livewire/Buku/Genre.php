<?php

namespace App\Livewire\Buku;

use App\Models\buku\Genre as BukuGenre;
use Livewire\Component;

class Genre extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuGenre::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuGenre::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.genre');
    }
}
