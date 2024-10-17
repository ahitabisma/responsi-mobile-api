<?php

namespace App\Livewire\Buku;

use App\Models\buku\Rating as BukuRating;
use Livewire\Component;

class Rating extends Component
{
    public $list;

    public function mount()
    {
        $this->list = BukuRating::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = BukuRating::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.buku.rating');
    }
}
