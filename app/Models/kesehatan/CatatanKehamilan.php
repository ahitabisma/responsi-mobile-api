<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKehamilan extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_catatan_kehamilan';

    protected $fillable = ['patient_name', 'gestational_week', 'baby_weight'];
}
