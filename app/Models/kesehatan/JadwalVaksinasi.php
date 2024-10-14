<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalVaksinasi extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_jadwal_vaksinasi';

    protected $fillable = ['person_name', 'vaccine_type', 'age'];
}
