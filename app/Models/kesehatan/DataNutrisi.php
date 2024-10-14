<?php

namespace App\Models\kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNutrisi extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_data_nutrisi';

    protected $fillable = ['food_item', 'calories', 'fat_content'];
}
