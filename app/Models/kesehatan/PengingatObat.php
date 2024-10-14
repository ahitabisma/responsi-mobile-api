<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengingatObat extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_pengingat_obat';

    protected $fillable = ['medicine_name', 'dosage_mg', 'times_per_day'];
}
