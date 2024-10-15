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
use App\Http\Controllers\kesehatan\RekamMedisPasienController;
use App\Http\Controllers\kesehatan\JadwalVaksinasiController;
use App\Http\Controllers\kesehatan\DataNutrisiController;
use App\Http\Controllers\kesehatan\CatatanAktivitasFisikController;
use App\Http\Controllers\kesehatan\ManajemenStresController;
use App\Http\Controllers\kesehatan\PemantauanTidurController;
use App\Http\Controllers\kesehatan\KesehatanMentalController;
use App\Http\Controllers\kesehatan\RiwayatAlergiController;
use App\Http\Controllers\kesehatan\PengingatObatController;
use App\Http\Controllers\kesehatan\CatatanKehamilanController;
use App\Http\Controllers\keuangan\AnggaranController;
use App\Http\Controllers\keuangan\Catatan_transaksiController;
use App\Http\Controllers\keuangan\Hutang_piutangController;
use App\Http\Controllers\keuangan\InvestasiController;
use App\Http\Controllers\keuangan\Kategori_transaksiController;
use App\Http\Controllers\keuangan\Laporan_bulananController;
use App\Http\Controllers\keuangan\Mata_uangController;
use App\Http\Controllers\keuangan\PemasukanController;
use App\Http\Controllers\keuangan\PengeluaranController;
use App\Http\Controllers\keuangan\SaldoController;
use App\Http\Controllers\pariwisata\DestinasiWisataController;
use App\Http\Controllers\pariwisata\DurasiTurController;
use App\Http\Controllers\pariwisata\FasilitasController;
use App\Http\Controllers\pariwisata\HargaTiketController;
use App\Http\Controllers\pariwisata\JadwalKeberangkatanController;
use App\Http\Controllers\pariwisata\PaketWisataController;
use App\Http\Controllers\pariwisata\PemanduWisataController;
use App\Http\Controllers\pariwisata\PenginapanController;
use App\Http\Controllers\pariwisata\TransportasiController;
use App\Http\Controllers\pariwisata\UlasanController;
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
    Route::prefix('rekam_medis_pasien')->group(function () {
        // Get All
        Route::get('', [RekamMedisPasienController::class, 'index']);
        // Show 
        Route::get('{id}', [RekamMedisPasienController::class, 'show']);
        // Create 
        Route::post('', [RekamMedisPasienController::class, 'store']);
        // Update 
        Route::put('{id}/update', [RekamMedisPasienController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [RekamMedisPasienController::class, 'destroy']);
    });

    // 1 . Table Jadwal Vaksinasi
    Route::prefix('jadwal_vaksinasi')->group(function () {
        // Get All
        Route::get('', [JadwalVaksinasiController::class, 'index']);
        // Show 
        Route::get('{id}', [JadwalVaksinasiController::class, 'show']);
        // Create 
        Route::post('', [JadwalVaksinasiController::class, 'store']);
        // Update 
        Route::put('{id}/update', [JadwalVaksinasiController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [JadwalVaksinasiController::class, 'destroy']);
    });

    // 2 . Table Data Nutrisi
    Route::prefix('data_nutrisi')->group(function () {
        // Get All
        Route::get('', [DataNutrisiController::class, 'index']);
        // Show 
        Route::get('{id}', [DataNutrisiController::class, 'show']);
        // Create 
        Route::post('', [DataNutrisiController::class, 'store']);
        // Update 
        Route::put('{id}/update', [DataNutrisiController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [DataNutrisiController::class, 'destroy']);
    });

    // 3 . Table Catatan Aktivitas Fisik
    Route::prefix('catatan_aktivitas_fisik')->group(function () {
        // Get All
        Route::get('', [CatatanAktivitasFisikController::class, 'index']);
        // Show 
        Route::get('{id}', [CatatanAktivitasFisikController::class, 'show']);
        // Create 
        Route::post('', [CatatanAktivitasFisikController::class, 'store']);
        // Update 
        Route::put('{id}/update', [CatatanAktivitasFisikController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [CatatanAktivitasFisikController::class, 'destroy']);
    });

    // 4 . Table Manajemen Stres
    Route::prefix('manajemen_stres')->group(function () {
        // Get All
        Route::get('', [ManajemenStresController::class, 'index']);
        // Show 
        Route::get('{id}', [ManajemenStresController::class, 'show']);
        // Create 
        Route::post('', [ManajemenStresController::class, 'store']);
        // Update 
        Route::put('{id}/update', [ManajemenStresController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [ManajemenStresController::class, 'destroy']);
    });

    // 5 . Table Pemantauan Tidur
    Route::prefix('pemantauan_tidur')->group(function () {
        // Get All
        Route::get('', [PemantauanTidurController::class, 'index']);
        // Show 
        Route::get('{id}', [PemantauanTidurController::class, 'show']);
        // Create 
        Route::post('', [PemantauanTidurController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PemantauanTidurController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PemantauanTidurController::class, 'destroy']);
    });

    // 6 . Table Kesehatan Mental
    Route::prefix('kesehatan_mental')->group(function () {
        // Get All
        Route::get('', [KesehatanMentalController::class, 'index']);
        // Show 
        Route::get('{id}', [KesehatanMentalController::class, 'show']);
        // Create 
        Route::post('', [KesehatanMentalController::class, 'store']);
        // Update 
        Route::put('{id}/update', [KesehatanMentalController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [KesehatanMentalController::class, 'destroy']);
    });

    // 7 . Table Riwayat Alergi
    Route::prefix('riwayat_alergi')->group(function () {
        // Get All
        Route::get('', [RiwayatAlergiController::class, 'index']);
        // Show 
        Route::get('{id}', [RiwayatAlergiController::class, 'show']);
        // Create 
        Route::post('', [RiwayatAlergiController::class, 'store']);
        // Update 
        Route::put('{id}/update', [RiwayatAlergiController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [RiwayatAlergiController::class, 'destroy']);
    });

    // 8 . Table Pengingat Obat
    Route::prefix('pengingat_obat')->group(function () {
        // Get All
        Route::get('', [PengingatObatController::class, 'index']);
        // Show 
        Route::get('{id}', [PengingatObatController::class, 'show']);
        // Create 
        Route::post('', [PengingatObatController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PengingatObatController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PengingatObatController::class, 'destroy']);
    });

    // 9 . Table Catatan Kehamilan
    Route::prefix('catatan_kehamilan')->group(function () {
        // Get All
        Route::get('', [CatatanKehamilanController::class, 'index']);
        // Show 
        Route::get('{id}', [CatatanKehamilanController::class, 'show']);
        // Create 
        Route::post('', [CatatanKehamilanController::class, 'store']);
        // Update 
        Route::put('{id}/update', [CatatanKehamilanController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [CatatanKehamilanController::class, 'destroy']);
    });
});


// 2. Aplikasi Manajemen Keuangan
Route::prefix('keuangan')->group(function () {
    Route::resource('anggaran',AnggaranController::class);
    Route::resource('catatan_transaksi',Catatan_transaksiController::class);
    Route::resource('hutang_piutang',Hutang_piutangController::class);
    Route::resource('investasi',InvestasiController::class);
    Route::resource('kategori_transaksi',Kategori_transaksiController::class);
    Route::resource('laporan_bulanan',Laporan_bulananController::class);
    Route::resource('mata_uang',Mata_uangController::class);
    Route::resource('pemasukan',PemasukanController::class);
    Route::resource('pengeluaran',PengeluaranController::class);
    Route::resource('saldo',SaldoController::class);
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
    Route::prefix('destinasi_wisata')->group(function () {
        // Get All
        Route::get('', [DestinasiWisataController::class, 'index']);
        // Show 
        Route::get('{id}', [DestinasiWisataController::class, 'show']);
        // Create 
        Route::post('', [DestinasiWisataController::class, 'store']);
        // Update 
        Route::put('{id}/update', [DestinasiWisataController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [DestinasiWisataController::class, 'destroy']);
    });
    // 1 . Table Harga Tiket
    Route::prefix('harga_tiket')->group(function () {
        // Get All
        Route::get('', [HargaTiketController::class, 'index']);
        // Show 
        Route::get('{id}', [HargaTiketController::class, 'show']);
        // Create 
        Route::post('', [HargaTiketController::class, 'store']);
        // Update 
        Route::put('{id}/update', [HargaTiketController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [HargaTiketController::class, 'destroy']);
    });
    // 2 . Table Jadwal Keberangkatan
    Route::prefix('jadwal_keberangkatan')->group(function () {
        // Get All
        Route::get('', [JadwalKeberangkatanController::class, 'index']);
        // Show 
        Route::get('{id}', [JadwalKeberangkatanController::class, 'show']);
        // Create 
        Route::post('', [JadwalKeberangkatanController::class, 'store']);
        // Update 
        Route::put('{id}/update', [JadwalKeberangkatanController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [JadwalKeberangkatanController::class, 'destroy']);
    });
    // 3 . Table Durasi Tur
    Route::prefix('durasi_tur')->group(function () {
        // Get All
        Route::get('', [DurasiTurController::class, 'index']);
        // Show 
        Route::get('{id}', [DurasiTurController::class, 'show']);
        // Create 
        Route::post('', [DurasiTurController::class, 'store']);
        // Update 
        Route::put('{id}/update', [DurasiTurController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [DurasiTurController::class, 'destroy']);
    });
    // 4 . Table Fasilitas
    Route::prefix('fasilitas')->group(function () {
        // Get All
        Route::get('', [FasilitasController::class, 'index']);
        // Show 
        Route::get('{id}', [FasilitasController::class, 'show']);
        // Create 
        Route::post('', [FasilitasController::class, 'store']);
        // Update 
        Route::put('{id}/update', [FasilitasController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [FasilitasController::class, 'destroy']);
    });
    // 5 . Table Pemandu Wisata
    Route::prefix('pemandu_wisata')->group(function () {
        // Get All
        Route::get('', [PemanduWisataController::class, 'index']);
        // Show 
        Route::get('{id}', [PemanduWisataController::class, 'show']);
        // Create 
        Route::post('', [PemanduWisataController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PemanduWisataController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PemanduWisataController::class, 'destroy']);
    });
    // 6 . Table Transportasi
    Route::prefix('transportasi')->group(function () {
        // Get All
        Route::get('', [TransportasiController::class, 'index']);
        // Show 
        Route::get('{id}', [TransportasiController::class, 'show']);
        // Create 
        Route::post('', [TransportasiController::class, 'store']);
        // Update 
        Route::put('{id}/update', [TransportasiController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [TransportasiController::class, 'destroy']);
    });
    // 7 . Table Penginapan
    Route::prefix('penginapan')->group(function () {
        // Get All
        Route::get('', [PenginapanController::class, 'index']);
        // Show 
        Route::get('{id}', [PenginapanController::class, 'show']);
        // Create 
        Route::post('', [PenginapanController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PenginapanController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PenginapanController::class, 'destroy']);
    });
    // 8 . Table Paket Wisata
    Route::prefix('paket_wisata')->group(function () {
        // Get All
        Route::get('', [PaketWisataController::class, 'index']);
        // Show 
        Route::get('{id}', [PaketWisataController::class, 'show']);
        // Create 
        Route::post('', [PaketWisataController::class, 'store']);
        // Update 
        Route::put('{id}/update', [PaketWisataController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [PaketWisataController::class, 'destroy']);
    });
    // 9 . Table Ulasan
    Route::prefix('ulasan')->group(function () {
        // Get All
        Route::get('', [UlasanController::class, 'index']);
        // Show 
        Route::get('{id}', [UlasanController::class, 'show']);
        // Create 
        Route::post('', [UlasanController::class, 'store']);
        // Update 
        Route::put('{id}/update', [UlasanController::class, 'update']);
        // Delete 
        Route::delete('{id}/delete', [UlasanController::class, 'destroy']);
    });
});
