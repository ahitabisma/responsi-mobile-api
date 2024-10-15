<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanTransaksi extends Model
{
    use HasFactory;

    protected $table = 'keuangan_catatan_transaksi';

    protected $fillable = ['detail', 'amount', 'category'];
}
