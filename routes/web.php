<?php

use App\Models\SegmentDua;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/buku', function () {
    $table = SegmentDua::where(['paket_segment_satu' => 0])->get();
    return view('buku', ['table' => $table]);
})->name('buku');

Route::get('/kesehatan', function () {
    $table = SegmentDua::where(['paket_segment_satu' => 1])->get();
    return view('kesehatan', ['table' => $table]);
})->name('kesehatan');

Route::get('/keuangan', function () {
    $table = SegmentDua::where(['paket_segment_satu' => 2])->get();
    return view('keuangan', ['table' => $table]);
})->name('keuangan');

Route::get('/pariwisata', function () {
    $table = SegmentDua::where(['paket_segment_satu' => 3])->get();
    return view('pariwisata', ['table' => $table]);
})->name('pariwisata');
