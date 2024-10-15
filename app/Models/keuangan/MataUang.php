<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataUang extends Model
{
    use HasFactory;

    protected $table = 'keuangan_mata_uang';

    protected $fillable = ['currency', 'exchange_rate', 'symbol'];
}
