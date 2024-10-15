<?php

namespace App\Models\pariwisata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

		// Tambahin baris ini sesuain sama nama table yang ada di migrasi
    protected $table = 'pariwisata_paket_wisata';

    // Tambahin baris ini isi sama kolom yang ada di migrasi
    protected $fillable = ['package', 'price', 'activities'];
}
