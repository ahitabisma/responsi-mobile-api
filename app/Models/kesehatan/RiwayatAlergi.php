<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatAlergi extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_riwayat_alergi';

    protected $fillable = ['allergen', 'reaction', 'severity_scale'];
}
