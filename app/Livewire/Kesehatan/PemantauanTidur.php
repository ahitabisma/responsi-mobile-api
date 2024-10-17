<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\PemantauanTidur as KesehatanPemantauanTidur;
use Livewire\Component;

class PemantauanTidur extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanPemantauanTidur::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanPemantauanTidur::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.pemantauan-tidur');
    }
}
