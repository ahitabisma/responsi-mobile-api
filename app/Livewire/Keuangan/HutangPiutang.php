<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\HutangPiutang as KeuanganHutangPiutang;
use Livewire\Component;

class HutangPiutang extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganHutangPiutang::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganHutangPiutang::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.hutang-piutang');
    }
}
