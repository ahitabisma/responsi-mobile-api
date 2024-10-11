<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isbn extends Model
{
    use HasFactory;

    protected $table = 'buku_isbn';

    protected $fillable = ['isbn_code', 'format', 'print_length'];
}
