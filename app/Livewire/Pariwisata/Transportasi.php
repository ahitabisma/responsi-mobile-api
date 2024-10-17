<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\Transportasi as PariwisataTransportasi;
use Livewire\Component;

class Transportasi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataTransportasi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataTransportasi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.transportasi');
    }
}
