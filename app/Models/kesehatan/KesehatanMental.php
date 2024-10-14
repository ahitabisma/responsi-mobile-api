<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanMental extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_kesehatan_mental';

    protected $fillable = ['mental_state', 'therapy_sessions', 'medication'];
}
