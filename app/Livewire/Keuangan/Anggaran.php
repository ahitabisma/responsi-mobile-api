<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\Anggaran as KeuanganAnggaran;
use Livewire\Component;

class Anggaran extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganAnggaran::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganAnggaran::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.anggaran');
    }
}
