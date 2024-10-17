<?php

namespace App\Livewire\Buku;

use App\Models\buku\LokasiRak as BukuLokasiRak;
use Livewire\Component;

class LokasiRak extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuLokasiRak::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuLokasiRak::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.lokasi-rak');
    }
}
