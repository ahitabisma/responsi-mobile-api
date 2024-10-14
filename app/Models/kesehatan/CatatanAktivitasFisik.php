<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanAktivitasFisik extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_catatan_aktivitas_fisik';

    protected $fillable = ['activity_name', 'duration', 'intensity'];
}
