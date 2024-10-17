<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\DataNutrisi as KesehatanDataNutrisi;
use Livewire\Component;

class DataNutrisi extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanDataNutrisi::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanDataNutrisi::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.data-nutrisi');
    }
}
