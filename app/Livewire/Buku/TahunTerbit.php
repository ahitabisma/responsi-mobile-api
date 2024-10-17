<?php

namespace App\Livewire\Buku;

use App\Models\buku\TahunTerbit as BukuTahunTerbit;
use Livewire\Component;

class TahunTerbit extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuTahunTerbit::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuTahunTerbit::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.tahun-terbit');
    }
}
