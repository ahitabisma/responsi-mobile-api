<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiRak extends Model
{
    use HasFactory;

    protected $table = 'buku_lokasi_rak';

    protected $fillable = ['shelf_number', 'aisle_letter', 'floor_level'];
}
