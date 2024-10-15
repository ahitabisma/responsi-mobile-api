<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBulanan extends Model
{
    use HasFactory;

    protected $table = 'keuangan_laporan_bulanan';

    protected $fillable = ['month', 'income', 'expenses'];
}
