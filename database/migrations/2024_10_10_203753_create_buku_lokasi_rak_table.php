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
        Schema::create('buku_lokasi_rak', function (Blueprint $table) {
            $table->id();
            $table->integer('shelf_number');
            $table->string('aisle_letter');
            $table->integer('floor_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_lokasi_rak');
    }
};
