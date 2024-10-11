<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentTiga extends Model
{
    use HasFactory;

    protected $table = 'segment_tiga';

    protected $fillable = ['digit_satuan', 'kustomisasi'];
}
