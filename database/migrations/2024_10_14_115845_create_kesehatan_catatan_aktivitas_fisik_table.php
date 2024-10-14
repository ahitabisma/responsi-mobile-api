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
        Schema::create('kesehatan_catatan_aktivitas_fisik', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->integer('duration');
            $table->string('intensity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_catatan_aktivitas_fisik');
    }
};
