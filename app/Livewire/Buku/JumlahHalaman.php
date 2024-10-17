<?php

namespace App\Livewire\Buku;

use App\Models\buku\JumlahHalaman as BukuJumlahHalaman;
use Livewire\Component;

class JumlahHalaman extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuJumlahHalaman::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuJumlahHalaman::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.jumlah-halaman');
    }
}
