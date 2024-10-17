<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\HargaTiket as PariwisataHargaTiket;
use Livewire\Component;

class HargaTiket extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataHargaTiket::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataHargaTiket::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.harga-tiket');
    }
}
