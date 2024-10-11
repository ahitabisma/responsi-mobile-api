<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'buku_penerbit';

    protected $fillable = ['publisher_name', 'established_year', 'country'];
}
