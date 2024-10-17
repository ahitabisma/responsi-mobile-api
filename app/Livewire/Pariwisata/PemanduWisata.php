<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\PemanduWisata as PariwisataPemanduWisata;
use Livewire\Component;

class PemanduWisata extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataPemanduWisata::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataPemanduWisata::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.pemandu-wisata');
    }
}
