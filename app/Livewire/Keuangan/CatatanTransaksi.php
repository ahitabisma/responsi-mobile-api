<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\CatatanTransaksi as KeuanganCatatanTransaksi;
use Livewire\Component;

class CatatanTransaksi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganCatatanTransaksi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganCatatanTransaksi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.catatan-transaksi');
    }
}
