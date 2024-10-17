<?php

namespace App\Livewire\Pariwisata;

use App\Models\pariwisata\JadwalKeberangkatan as PariwisataJadwalKeberangkatan;
use Livewire\Component;

class JadwalKeberangkatan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = PariwisataJadwalKeberangkatan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = PariwisataJadwalKeberangkatan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.pariwisata.jadwal-keberangkatan');
    }
}
