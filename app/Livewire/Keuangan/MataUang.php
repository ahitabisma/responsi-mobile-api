<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\MataUang as KeuanganMataUang;
use Livewire\Component;

class MataUang extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganMataUang::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganMataUang::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.mata-uang');
    }
}
