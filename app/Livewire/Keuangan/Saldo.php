<?php

namespace App\Livewire\Keuangan;

use App\Models\keuangan\Saldo as KeuanganSaldo;
use Livewire\Component;

class Saldo extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KeuanganSaldo::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KeuanganSaldo::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.keuangan.saldo');
    }
}
