<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\Investasi as KeuanganInvestasi;
use Livewire\Component;

class Investasi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganInvestasi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganInvestasi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.investasi');
    }
}
