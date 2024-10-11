<?php

namespace Database\Seeders;

use App\Models\SegmentDua;
use App\Models\SegmentSatu;
use App\Models\SegmentTiga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Segment 1
        $data_segment_satu = [
            [
                'paket' => 0,
                'jenis_aplikasi' => 'Aplikasi Manajemen Buku'
            ],
            [
                'paket' => 1,
                'jenis_aplikasi' => 'Aplikasi Manajemen Kesehatan'
            ],
            [
                'paket' => 2,
                'jenis_aplikasi' => 'Aplikasi Manajemen Keuangan'
            ],
            [
                'paket' => 3,
                'jenis_aplikasi' => 'Aplikasi Manajemen Pariwisata'
            ]
        ];

        foreach ($data_segment_satu as $segment_satu) {
            SegmentSatu::create($segment_satu);
        }

        // Segment 2
        $data_segment_dua = [
            // Paket 0
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 0,
                'nama_tabel' => 'genre',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'book_title (String)',
                'kolom_3' => 'book_genre (String)',
                'kolom_4' => 'cover_type (String)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 1,
                'nama_tabel' => 'penulis',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'author_name (String)',
                'kolom_3' => 'nationality (String)',
                'kolom_4' => 'birth_year (Integer)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 2,
                'nama_tabel' => 'penerbit',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'publisher_name (String)',
                'kolom_3' => 'established_year (Integer)',
                'kolom_4' => 'country (String)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 3,
                'nama_tabel' => 'tahun_terbit',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'publication_year (Integer)',
                'kolom_3' => 'edition_number (Integer)',
                'kolom_4' => 'language (String)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 4,
                'nama_tabel' => 'isbn',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'isbn_code (String)',
                'kolom_3' => 'format (String)',
                'kolom_4' => 'print_length (Integer)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 5,
                'nama_tabel' => 'jumlah_halaman',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'total_pages (Integer)',
                'kolom_3' => 'paper_type (String)',
                'kolom_4' => 'dimensions (String)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 6,
                'nama_tabel' => 'bahasa',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'original_language (String)',
                'kolom_3' => 'translated_language (String)',
                'kolom_4' => 'translator_name (String)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 7,
                'nama_tabel' => 'lokasi_rak',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'shelf_number (Integer)',
                'kolom_3' => 'aisle_letter (String)',
                'kolom_4' => 'floor_level (Integer)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 8,
                'nama_tabel' => 'status',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'availability (String)',
                'kolom_3' => 'borrower_name (String)',
                'kolom_4' => 'due_days (Integer)',
            ],
            [
                'paket_segment_satu' => 0,
                'digit_puluhan' => 9,
                'nama_tabel' => 'rating',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'average_rating (Integer)',
                'kolom_3' => 'total_reviews (Integer)',
                'kolom_4' => 'best_seller_rank (Integer)',
            ],

            // Paket 1
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 0,
                'nama_tabel' => 'rekam_medis_pasien',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'patient_name (String)',
                'kolom_3' => 'symptom (String)',
                'kolom_4' => 'severity (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 1,
                'nama_tabel' => 'jadwal_vaksinasi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'person_name (String)',
                'kolom_3' => 'vaccine_type (String)',
                'kolom_4' => 'age (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 2,
                'nama_tabel' => 'data_nutrisi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'food_item (String)',
                'kolom_3' => 'calories (Integer)',
                'kolom_4' => 'fat_content (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 3,
                'nama_tabel' => 'catatan_aktivitas_fisik',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'activity_name (String)',
                'kolom_3' => 'duration (Integer)',
                'kolom_4' => 'intensity (String)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 4,
                'nama_tabel' => 'manajemen_stres',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'stress_factor (String)',
                'kolom_3' => 'coping_strategy (String)',
                'kolom_4' => 'stress_level (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 5,
                'nama_tabel' => 'pemantauan_tidur',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'sleep_quality (String)',
                'kolom_3' => 'sleep_hours (Integer)',
                'kolom_4' => 'sleep_disorders (String)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 6,
                'nama_tabel' => 'kesehatan_mental',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'mental_state (String)',
                'kolom_3' => 'therapy_sessions (Integer)',
                'kolom_4' => 'medication (String)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 7,
                'nama_tabel' => 'riwayat_alergi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'allergen (String)',
                'kolom_3' => 'reaction (String)',
                'kolom_4' => 'severity_scale (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 8,
                'nama_tabel' => 'pengingat_obat',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'medicine_name (String)',
                'kolom_3' => 'dosage_mg (Integer)',
                'kolom_4' => 'times_per_day (Integer)',
            ],
            [
                'paket_segment_satu' => 1,
                'digit_puluhan' => 9,
                'nama_tabel' => 'catatan_kehamilan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'patient_name (String)',
                'kolom_3' => 'gestational_week (Integer)',
                'kolom_4' => 'baby_weight (Integer)',
            ],


            // Paket 2
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 0,
                'nama_tabel' => 'pemasukan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'source (String)',
                'kolom_3' => 'amount (Integer)',
                'kolom_4' => 'frequency (Integer)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 1,
                'nama_tabel' => 'pengeluaran',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'expense (String)',
                'kolom_3' => 'cost (Integer)',
                'kolom_4' => 'category (String)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 2,
                'nama_tabel' => 'kategori_transaksi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'transaction (String)',
                'kolom_3' => 'type (String)',
                'kolom_4' => 'amount (Integer)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 3,
                'nama_tabel' => 'saldo',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'account (String)',
                'kolom_3' => 'balance (Integer)',
                'kolom_4' => 'status (String)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 4,
                'nama_tabel' => 'investasi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'investment (String)',
                'kolom_3' => 'value (Integer)',
                'kolom_4' => 'portfolio (String)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 5,
                'nama_tabel' => 'hutang_piutang',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'person (String)',
                'kolom_3' => 'amount (Integer)',
                'kolom_4' => 'status (String)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 6,
                'nama_tabel' => 'anggaran',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'budget_item (String)',
                'kolom_3' => 'allocated (Integer)',
                'kolom_4' => 'spent (Integer)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 7,
                'nama_tabel' => 'laporan_bulanan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'month (String)',
                'kolom_3' => 'income (Integer)',
                'kolom_4' => 'expenses (Integer)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 8,
                'nama_tabel' => 'catatan_transaksi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'detail (String)',
                'kolom_3' => 'amount (Integer)',
                'kolom_4' => 'category (String)',
            ],
            [
                'paket_segment_satu' => 2,
                'digit_puluhan' => 9,
                'nama_tabel' => 'mata_uang',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'currency (String)',
                'kolom_3' => 'exchange_rate (Integer)',
                'kolom_4' => 'symbol (String)',
            ],


            // Paket 3
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 0,
                'nama_tabel' => 'destinasi_wisata',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'destination (String)',
                'kolom_3' => 'location (String)',
                'kolom_4' => 'attraction (String)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 1,
                'nama_tabel' => 'harga_tiket',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'event (String)',
                'kolom_3' => 'price (Integer)',
                'kolom_4' => 'seat (String)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 2,
                'nama_tabel' => 'jadwal_keberangkatan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'transport (String)',
                'kolom_3' => 'route (String)',
                'kolom_4' => 'frequency (Integer)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 3,
                'nama_tabel' => 'durasi_tur',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'tour (String)',
                'kolom_3' => 'days (Integer)',
                'kolom_4' => 'cost (Integer)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 4,
                'nama_tabel' => 'fasilitas',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'facility (String)',
                'kolom_3' => 'type (String)',
                'kolom_4' => 'status (String)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 5,
                'nama_tabel' => 'pemandu_wisata',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'guide (String)',
                'kolom_3' => 'languages (String)',
                'kolom_4' => 'rating (Integer)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 6,
                'nama_tabel' => 'transportasi',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'vehicle (String)',
                'kolom_3' => 'company (String)',
                'kolom_4' => 'capacity (Integer)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 7,
                'nama_tabel' => 'penginapan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'accommodation (String)',
                'kolom_3' => 'room (String)',
                'kolom_4' => 'rate (Integer)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 8,
                'nama_tabel' => 'paket_wisata',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'package (String)',
                'kolom_3' => 'price (Integer)',
                'kolom_4' => 'activities (String)',
            ],
            [
                'paket_segment_satu' => 3,
                'digit_puluhan' => 9,
                'nama_tabel' => 'ulasan',
                'kolom_1' => 'id (int, PK, increment)',
                'kolom_2' => 'reviewer (String)',
                'kolom_3' => 'rating (Integer)',
                'kolom_4' => 'comments (String)',
            ],

        ];

        foreach ($data_segment_dua as $segment_dua) {
            SegmentDua::create($segment_dua);
        }

        // Segment 3
        $data_segment_tiga = [
            [
                'digit_satuan' => 0,
                'kustomisasi' => 'Tema Gelap Biru, Font Roboto',
            ],
            [
                'digit_satuan' => 1,
                'kustomisasi' => 'Tema Terang Merah, Font Arial',
            ],
            [
                'digit_satuan' => 2,
                'kustomisasi' => 'Tema Gelap Hijau, Font Times New Roman',
            ],
            [
                'digit_satuan' => 3,
                'kustomisasi' => 'Tema Terang Kuning, Font Helvetica',
            ],
            [
                'digit_satuan' => 4,
                'kustomisasi' => 'Tema Gradien Biru-Ungu, Font Courier New',
            ],
            [
                'digit_satuan' => 5,
                'kustomisasi' => 'Tema Monokrom, Font Georgia',
            ],
            [
                'digit_satuan' => 6,
                'kustomisasi' => 'Tema Rainbow, Font Verdana',
            ],
            [
                'digit_satuan' => 7,
                'kustomisasi' => 'Tema Warna Pastel, Font Calibri',
            ],
            [
                'digit_satuan' => 8,
                'kustomisasi' => 'Tema Kuning Orange, Font Comic Sans',
            ],
            [
                'digit_satuan' => 9,
                'kustomisasi' => 'Tema Hijau Kuning, Font Sans Serif',
            ],
        ];

        foreach ($data_segment_tiga as $segment_tiga) {
            SegmentTiga::create($segment_tiga);
        }
    }
}
