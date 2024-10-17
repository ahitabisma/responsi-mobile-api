<?php

namespace App\Livewire\Buku;

use App\Models\buku\Penerbit as BukuPenerbit;
use Livewire\Component;

class Penerbit extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuPenerbit::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuPenerbit::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.penerbit');
    }
}
