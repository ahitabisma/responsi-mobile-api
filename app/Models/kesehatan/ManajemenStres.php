<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManajemenStres extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_manajemen_stres';

    protected $fillable = ['stress_factor', 'coping_strategy', 'stress_level'];
}
