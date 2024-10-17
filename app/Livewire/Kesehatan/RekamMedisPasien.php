<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\RekamMedisPasien as KesehatanRekamMedisPasien;
use Livewire\Component;

class RekamMedisPasien extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanRekamMedisPasien::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanRekamMedisPasien::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.rekam-medis-pasien');
    }
}
