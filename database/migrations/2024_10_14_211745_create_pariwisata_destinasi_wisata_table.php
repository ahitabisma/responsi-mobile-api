<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pariwisata_destinasi_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('location');
            $table->string('attraction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pariwisata_destinasi_wisata');
    }
};