<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\Ulasan as PariwisataUlasan;
use Livewire\Component;

class Ulasan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataUlasan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataUlasan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.ulasan');
    }
}
