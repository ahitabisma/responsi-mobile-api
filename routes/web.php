<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PariwisataController;
use App\Models\SegmentDua;
use Illuminate\Support\Facades\Route;

// Segment
Route::get('/', function () {
    return view('home');
})->name('home');

// User
Route::get('/user', function () {
    return view('user');
})->name('user');

// Buku
Route::prefix('buku')->group(function () {
    Route::get('', [BukuController::class, 'index'])->name('buku');

    $bukus = SegmentDua::where(['paket_segment_satu' => 0])->select(['nama_tabel'])->get();
    foreach ($bukus as $bukuRoute) {
        Route::get($bukuRoute->nama_tabel, function () use ($bukuRoute) {
            return view('buku.'. $bukuRoute->nama_tabel);
        })->name('buku.' . $bukuRoute->nama_tabel);
    }
});

// Kesehatan
Route::prefix('kesehatan')->group(function () {
    Route::get('', [KesehatanController::class, 'index'])->name('kesehatan');

    $kesehatan = SegmentDua::where(['paket_segment_satu' => 1])->select(['nama_tabel'])->get();
    foreach ($kesehatan as $kesehatanRoute) {
        Route::get($kesehatanRoute->nama_tabel, function () use ($kesehatanRoute) {
            return view('kesehatan.'. $kesehatanRoute->nama_tabel);
        })->name('kesehatan.' . $kesehatanRoute->nama_tabel);
    }
});

// Keuangan
Route::prefix('keuangan')->group(function () {
    Route::get('', [KeuanganController::class, 'index'])->name('keuangan');

    $keuangan = SegmentDua::where(['paket_segment_satu' => 2])->select(['nama_tabel'])->get();
    foreach ($keuangan as $keuanganRoute) {
        Route::get($keuanganRoute->nama_tabel, function () use ($keuanganRoute) {
            return view('keuangan.'. $keuanganRoute->nama_tabel);
        })->name('keuangan.' . $keuanganRoute->nama_tabel);
    }
});

// Pariwisata
Route::prefix('pariwisata')->group(function () {
    Route::get('', [PariwisataController::class, 'index'])->name('pariwisata');

    $pariwisata = SegmentDua::where(['paket_segment_satu' => 3])->select(['nama_tabel'])->get();
    foreach ($pariwisata as $pariwisataRoute) {
        Route::get($pariwisataRoute->nama_tabel, function () use ($pariwisataRoute) {
            return view('pariwisata.'. $pariwisataRoute->nama_tabel);
        })->name('pariwisata.' . $pariwisataRoute->nama_tabel);
    }
});
