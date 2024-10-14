<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedisPasien extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_rekam_medis_pasien';

    protected $fillable = ['patient_name', 'symptom', 'severity'];
}
