<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\DestinasiWisata as PariwisataDestinasiWisata;
use Livewire\Component;

class DestinasiWisata extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataDestinasiWisata::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataDestinasiWisata::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.destinasi-wisata');
    }
}
