<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\buku\BahasaController;
use App\Http\Controllers\buku\GenreController;
use App\Http\Controllers\buku\IsbnController;
use App\Http\Controllers\buku\JumlahHalamanController;
use App\Http\Controllers\buku\LokasiRakController;
use App\Http\Controllers\buku\PenerbitController;
use App\Http\Controllers\buku\PenulisController;
use App\Http\Controllers\buku\RatingController;
use App\Http\Controllers\buku\StatusController;
use App\Http\Controllers\buku\TahunTerbitController;
use Illuminate\Support\Facades\Route;

// Registrasi
Route::post('registrasi', [AuthController::class, 'registrasi']);
// Login
Route::post('login', [AuthController::class, 'login']);

// 0. Aplikasi Manajemen Buku
Route::prefix('buku')->group(function () {
    // 0 . Table Genre
    Route::prefix('genre')->group(function () {
        // Get All
        Route::get('', [GenreController::class, 'index']);
        // Show 
        Route::get('{id}', [GenreController::class, 'show']);
        // Create 
        Route::post('', [GenreController::class, 'store']);
        // Update 
        Route::put('{id}/update', [GenreController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [GenreController::class, 'destroy']);
    });

    // 1 . Table Penulis
    Route::prefix('penulis')->group(function () {
        // Get All
        Route::get('', [PenulisController::class, 'index']);
        // Show 
        Route::get('{id}', [PenulisController::class, 'show']);
        // Create 
        Route::post('', [PenulisController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PenulisController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PenulisController::class, 'destroy']);
    });

    // 2 . Table Penerbit
    Route::prefix('penerbit')->group(function () {
        // Get All
        Route::get('', [PenerbitController::class, 'index']);
        // Show 
        Route::get('{id}', [PenerbitController::class, 'show']);
        // Create 
        Route::post('', [PenerbitController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PenerbitController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PenerbitController::class, 'destroy']);
    });

    // 3 . Table Tahun Terbit
    Route::prefix('tahun_terbit')->group(function () {
        // Get All
        Route::get('', [TahunTerbitController::class, 'index']);
        // Show 
        Route::get('{id}', [TahunTerbitController::class, 'show']);
        // Create 
        Route::post('', [TahunTerbitController::class, 'store']);
        // Update 
        Route::put('{id}/update', [TahunTerbitController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [TahunTerbitController::class, 'destroy']);
    });

    // 4 . Table ISBN
    Route::prefix('isbn')->group(function () {
        // Get All
        Route::get('', [IsbnController::class, 'index']);
        // Show 
        Route::get('{id}', [IsbnController::class, 'show']);
        // Create 
        Route::post('', [IsbnController::class, 'store']);
        // Update 
        Route::put('{id}/update', [IsbnController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [IsbnController::class, 'destroy']);
    });

    // 5 . Table Jumlah Halaman
    Route::prefix('jumlah_halaman')->group(function () {
        // Get All
        Route::get('', [JumlahHalamanController::class, 'index']);
        // Show 
        Route::get('{id}', [JumlahHalamanController::class, 'show']);
        // Create 
        Route::post('', [JumlahHalamanController::class, 'store']);
        // Update 
        Route::put('{id}/update', [JumlahHalamanController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [JumlahHalamanController::class, 'destroy']);
    });

    // 6 . Table Bahasa
    Route::prefix('bahasa')->group(function () {
        // Get All
        Route::get('', [BahasaController::class, 'index']);
        // Show 
        Route::get('{id}', [BahasaController::class, 'show']);
        // Create 
        Route::post('', [BahasaController::class, 'store']);
        // Update 
        Route::put('{id}/update', [BahasaController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [BahasaController::class, 'destroy']);
    });

    // 7 . Table Lokasi Rak
    Route::prefix('lokasi_rak')->group(function () {
        // Get All
        Route::get('', [LokasiRakController::class, 'index']);
        // Show 
        Route::get('{id}', [LokasiRakController::class, 'show']);
        // Create 
        Route::post('', [LokasiRakController::class, 'store']);
        // Update 
        Route::put('{id}/update', [LokasiRakController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [LokasiRakController::class, 'destroy']);
    });

    // 8 . Table Status
    Route::prefix('status')->group(function () {
        // Get All
        Route::get('', [StatusController::class, 'index']);
        // Show 
        Route::get('{id}', [StatusController::class, 'show']);
        // Create 
        Route::post('', [StatusController::class, 'store']);
        // Update 
        Route::put('{id}/update', [StatusController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [StatusController::class, 'destroy']);
    });

    // 9 . Table Rating
    Route::prefix('rating')->group(function () {
        // Get All
        Route::get('', [RatingController::class, 'index']);
        // Show 
        Route::get('{id}', [RatingController::class, 'show']);
        // Create 
        Route::post('', [RatingController::class, 'store']);
        // Update 
        Route::put('{id}/update', [RatingController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [RatingController::class, 'destroy']);
    });
});

// 1. Aplikasi Manajemen Kesehatan
Route::prefix('kesehatan')->group(function () {
    // 0 . Table Rekam Medis Pasien

    // 1 . Table Jadwal Vaksinasi

    // 2 . Table Data Nutrisi

    // 3 . Table Catatan Aktivitas Fisik

    // 4 . Table Manajemen Stres

    // 5 . Table Pemantauan Tidur

    // 6 . Table Kesehatan Mental

    // 7 . Table Riwayat Alergi

    // 8 . Table Pengingat Obat

    // 9 . Table Catatan Kehamilan
});


// 2. Aplikasi Manajemen Keuangan
Route::prefix('keuangan')->group(function () {
    // 0 . Table Pemasukan

    // 1 . Table Pengeluaran

    // 2 . Table Kategori Transaksi

    // 3 . Table Saldo

    // 4 . Table Investasi

    // 5 . Table Hutang Piutang

    // 6 . Table Anggaran

    // 7 . Table Laporan Bulanan

    // 8 . Table Catatan Transaksi

    // 9 . Table Mata Uang
});


// 3. Aplikasi Manajemen Pariwisata
Route::prefix('pariwisata')->group(function () {
    // 0 . Table Destinasi Wisata

    // 1 . Table Harga Tiket

    // 2 . Table Jadwal Keberangkatan

    // 3 . Table Durasi Tur

    // 4 . Table Fasilitas

    // 5 . Table Pemandu Wisata

    // 6 . Table Transportasi

    // 7 . Table Penginapan

    // 8 . Table Paket Wisata

    // 9 . Table Ulasan
});
