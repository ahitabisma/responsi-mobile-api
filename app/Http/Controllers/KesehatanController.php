<?php

namespace App\Http\Controllers;

use App\Models\SegmentDua;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KesehatanController extends Controller
{
    public function index(): View
    {
        $table = SegmentDua::where(['paket_segment_satu' => 1])->get();
        return view('kesehatan.index', ['table' => $table]);
    }
}
