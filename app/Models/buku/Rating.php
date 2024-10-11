<?php

namespace App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'buku_rating';

    protected $fillable = ['average_rating', 'total_reviews', 'best_seller_rank'];
}
