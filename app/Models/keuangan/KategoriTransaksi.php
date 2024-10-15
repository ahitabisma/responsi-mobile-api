<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTransaksi extends Model
{
    use HasFactory;

    protected $table = 'keuangan_kategori_transaksi';

    protected $fillable = ['transaction', 'type', 'amount'];
}
