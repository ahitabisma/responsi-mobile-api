<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\KategoriTransaksi as KeuanganKategoriTransaksi;
use Livewire\Component;

class KategoriTransaksi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganKategoriTransaksi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganKategoriTransaksi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.kategori-transaksi');
    }
}
