<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\Fasilitas as PariwisataFasilitas;
use Livewire\Component;

class Fasilitas extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataFasilitas::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataFasilitas::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.fasilitas');
    }
}
