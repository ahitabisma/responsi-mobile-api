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
        Schema::create('segment_dua', function (Blueprint $table) {
            $table->id();
            $table->integer('paket_segment_satu');
            $table->integer('digit_puluhan');
            $table->string('nama_tabel');
            $table->string('kolom_1');
            $table->string('kolom_2');
            $table->string('kolom_3');
            $table->string('kolom_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('segment_dua');
    }
};
