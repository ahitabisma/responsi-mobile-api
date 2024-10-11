<?php

namespace App\Livewire;

use App\Models\SegmentDua;
use App\Models\SegmentSatu;
use App\Models\SegmentTiga;
use Livewire\Component;

class CariSegment extends Component
{
    public $nim = '';
    public $last_nim = '';
    public $error = '';
    public $hasil = '';
    public $segment_satu = [];
    public $segment_dua = [];
    public $segment_tiga = [];

    public function cari()
    {
        $this->last_nim = '';
        $this->error = '';
        $this->hasil = '';
        $this->segment_satu = [];
        $this->segment_dua = [];
        $this->segment_tiga = [];

        $regex = '/^h1d0\d{5}$/i';

        if (preg_match($regex, $this->nim)) {
            $this->last_nim = substr($this->nim, -3);

            $this->hasil = intval($this->last_nim) % 4;

            // Segment Satu
            $find_segment_satu = SegmentSatu::where('paket', $this->hasil)->first();

            if ($find_segment_satu) {
                $this->segment_satu = [
                    'paket' => $find_segment_satu->paket,
                    'jenis_aplikasi' => $find_segment_satu->jenis_aplikasi,
                ];
            } else {
                $this->error = 'Segment Satu tidak ditemukan.';
            }

            // Segment Dua
            $puluhan = intval($this->last_nim[1]);

            $find_segment_dua = SegmentDua::where(['paket_segment_satu' => $this->hasil, 'digit_puluhan' => $puluhan])->first();

            if ($find_segment_dua) {
                $this->segment_dua = [
                    'paket_segment_satu' => $find_segment_dua->paket_segment_satu,
                    'digit_puluhan' => $find_segment_dua->digit_puluhan,
                    'nama_tabel' => $find_segment_dua->nama_tabel,
                    'kolom_1' => $find_segment_dua->kolom_1,
                    'kolom_2' => $find_segment_dua->kolom_2,
                    'kolom_3' => $find_segment_dua->kolom_3,
                    'kolom_4' => $find_segment_dua->kolom_4,
                ];
            } else {
                $this->error = 'Segment Dua tidak ditemukan.';
            }

            // Segment Tiga
            $satuan = intval($this->last_nim[2]);

            $find_segment_tiga = SegmentTiga::where(['digit_satuan' => $satuan])->first();

            if ($find_segment_tiga) {
                $this->segment_tiga = [
                    'digit_satuan' => $find_segment_tiga->digit_satuan,
                    'kustomisasi' => $find_segment_tiga->kustomisasi,
                ];
            } else {
                $this->error = 'Segment Tiga tidak ditemukan.';
            }
        } elseif (empty($this->nim)) {
            $this->error = 'Masukin NIM dulu.';
        } else {
            $this->error = 'NIM tidak valid.';
        }
    }

    public function resetFields()
    {
        $this->nim = '';
        $this->last_nim = '';
        $this->error = '';
        $this->hasil = '';
        $this->segment_satu = [];
        $this->segment_dua = [];
        $this->segment_tiga = [];
    }

    public function render()
    {
        return view('livewire.cari-segment');
    }
}
