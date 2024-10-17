<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\Pengeluaran as KeuanganPengeluaran;
use Livewire\Component;

class Pengeluaran extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganPengeluaran::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganPengeluaran::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.pengeluaran');
    }
}
