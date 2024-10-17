<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\ManajemenStres as KesehatanManajemenStres;
use Livewire\Component;

class ManajemenStres extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanManajemenStres::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanManajemenStres::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.manajemen-stres');
    }
}
