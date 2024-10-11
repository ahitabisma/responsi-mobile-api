<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentDua extends Model
{
    use HasFactory;

    protected $table = 'segment_dua';

    protected $fillable = ['paket_segment_satu', 'digit_puluhan', 'nama_tabel', 'kolom_1', 'kolom_2', 'kolom_3', 'kolom_4'];
}
