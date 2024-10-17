<?php

namespace App\Http\Controllers;

use App\Models\SegmentDua;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KeuanganController extends Controller
{
    public function index(): View
    {
        $table = SegmentDua::where(['paket_segment_satu' => 2])->get();
    return view('keuangan.index', ['table' => $table]);
    }
}
