<?php

namespace App\Models\pariwisata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

		// Tambahin baris ini sesuain sama nama table yang ada di migrasi
    protected $table = 'pariwisata_ulasan';

    // Tambahin baris ini isi sama kolom yang ada di migrasi
    protected $fillable = ['reviewer', 'rating', 'comments'];
}
