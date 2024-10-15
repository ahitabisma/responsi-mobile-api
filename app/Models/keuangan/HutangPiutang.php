<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangPiutang extends Model
{
    use HasFactory;

    protected $table = 'keuangan_hutang_piutang';

    protected $fillable = ['person', 'amount', 'status'];
}
