<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentSatu extends Model
{
    use HasFactory;

    protected $table = 'segment_satu';

    protected $fillable = ['paket', 'jenis_aplikasi'];
}
