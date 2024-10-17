<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\Pemasukan as KeuanganPemasukan;
use Livewire\Component;

class Pemasukan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganPemasukan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganPemasukan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.pemasukan');
    }
}
