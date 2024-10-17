<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\RiwayatAlergi as KesehatanRiwayatAlergi;
use Livewire\Component;

class RiwayatAlergi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanRiwayatAlergi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanRiwayatAlergi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.riwayat-alergi');
    }
}
