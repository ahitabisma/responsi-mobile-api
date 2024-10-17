<?php

namespace App\Http\Controllers;

use App\Models\SegmentDua;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    public function index(): View
    {
        $table = SegmentDua::where(['paket_segment_satu' => 0])->get();
        return view('buku.index', ['table' => $table]);
    }
}
