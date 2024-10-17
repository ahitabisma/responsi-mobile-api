<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\CatatanAktivitasFisik as KesehatanCatatanAktivitasFisik;
use Livewire\Component;

class CatatanAktivitasFisik extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanCatatanAktivitasFisik::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanCatatanAktivitasFisik::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.catatan-aktivitas-fisik');
    }
}
