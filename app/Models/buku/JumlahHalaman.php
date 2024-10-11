<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahHalaman extends Model
{
    use HasFactory;

    protected $table = 'buku_jumlah_halaman';

    protected $fillable = ['total_pages', 'paper_type', 'dimensions'];
}
