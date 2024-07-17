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
        Schema::create('royaltis', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('kd_user')->nullable();
            $table->unsignedInteger('kd_periode')->nullable();
            $table->unsignedInteger('general')->nullable();
            $table->unsignedInteger('optimasi')->nullable();
            $table->unsignedInteger('pending')->nullable();
            $table->string('detail_royalti', 225)->nullable();
            $table->string('general_pdf', 225)->nullable();
            $table->string('optimasi_pdf', 225)->nullable();
            $table->string('bukti_transfer', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('royaltis');
    }
};
