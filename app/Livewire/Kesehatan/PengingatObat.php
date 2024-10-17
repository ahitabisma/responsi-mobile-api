<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\PengingatObat as KesehatanPengingatObat;
use Livewire\Component;

class PengingatObat extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanPengingatObat::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanPengingatObat::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.pengingat-obat');
    }
}
