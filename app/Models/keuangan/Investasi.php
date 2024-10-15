<?php

namespace App\Models\keuangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;

    protected $table = 'keuangan_investasi';

    protected $fillable = ['investment', 'value', 'portfolio'];
}
