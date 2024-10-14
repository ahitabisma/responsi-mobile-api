<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemantauanTidur extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_pemantauan_tidur';

    protected $fillable = ['sleep_quality', 'sleep_hours', 'sleep_disorders'];
}
