<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\DurasiTur as PariwisataDurasiTur;
use Livewire\Component;

class DurasiTur extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataDurasiTur::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataDurasiTur::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.durasi-tur');
    }
}
