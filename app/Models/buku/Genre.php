<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'buku_genre';

    protected $fillable = ['book_title', 'book_genre', 'cover_type'];
}
