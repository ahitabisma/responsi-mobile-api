<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\JadwalVaksinasi as KesehatanJadwalVaksinasi;
use Livewire\Component;

class JadwalVaksinasi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanJadwalVaksinasi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanJadwalVaksinasi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.jadwal-vaksinasi');
    }
}
