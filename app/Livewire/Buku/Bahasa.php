<?php

namespace App\Livewire\Buku;

use App\Models\buku\Bahasa as BukuBahasa;
use Livewire\Component;

class Bahasa extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuBahasa::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuBahasa::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.bahasa');
    }
}
