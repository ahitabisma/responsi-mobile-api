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
        Schema::create('kesehatan_pemantauan_tidur', function (Blueprint $table) {
            $table->id();
            $table->string('sleep_quality');
            $table->integer('sleep_hours');
            $table->string('sleep_disorders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_pemantauan_tidur');
    }
};
