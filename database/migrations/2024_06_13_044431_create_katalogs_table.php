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
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id();
            $table->datetime('tgl_submit')->nullable();
            $table->integer('kd_user')->nullable();
            $table->string('judul_lagu', 100)->nullable();
            $table->string('performer', 100)->nullable();
            $table->string('composer', 50)->nullable();
            $table->string('song_control', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
