<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\PaketWisata as PariwisataPaketWisata;
use Livewire\Component;

class PaketWisata extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataPaketWisata::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataPaketWisata::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.paket-wisata');
    }
}
