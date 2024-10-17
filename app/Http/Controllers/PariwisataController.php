<?php

namespace App\Http\Controllers;

use App\Models\SegmentDua;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PariwisataController extends Controller
{
    public function index(): View
    {
        $table = SegmentDua::where(['paket_segment_satu' => 3])->get();
        return view('pariwisata.index', ['table' => $table]);
    }
}
