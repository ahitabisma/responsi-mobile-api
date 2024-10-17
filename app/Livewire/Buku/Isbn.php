<?php

namespace App\Livewire\Buku;

use App\Models\buku\Isbn as BukuIsbn;
use Livewire\Component;

class Isbn extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuIsbn::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuIsbn::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.isbn');
    }
}
