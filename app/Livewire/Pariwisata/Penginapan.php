<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\Penginapan as PariwisataPenginapan;
use Livewire\Component;

class Penginapan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataPenginapan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataPenginapan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.penginapan');
    }
}
