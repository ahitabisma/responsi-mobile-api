<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    use HasFactory;

    protected $table = 'buku_bahasa';

    protected $fillable = ['original_language', 'translated_language', 'translator_name'];
}
