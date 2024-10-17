<?php

namespace App\Livewire\Kesehatan;

use App\Models\kesehatan\CatatanKehamilan as KesehatanCatatanKehamilan;
use Livewire\Component;

class CatatanKehamilan extends Component
{
    public $list;

    public function mount()
    {
        $this->list = KesehatanCatatanKehamilan::orderBy('created_at', 'desc')->get();
    }

    public function refresh()
    {
        $this->list = KesehatanCatatanKehamilan::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.kesehatan.catatan-kehamilan');
    }
}
