<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunTerbit extends Model
{
    use HasFactory;

    protected $table = 'buku_tahun_terbit';

    protected $fillable = ['publication_year', 'edition_number', 'language'];
}
