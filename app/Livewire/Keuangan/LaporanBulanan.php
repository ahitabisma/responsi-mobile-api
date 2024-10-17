<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\LaporanBulanan as KeuanganLaporanBulanan;
use Livewire\Component;

class LaporanBulanan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganLaporanBulanan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganLaporanBulanan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.laporan-bulanan');
    }
}
