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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45);
            $table->string('usernama');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('activation_selector', 255)->nullable();
            $table->string('activation_code', 255)->nullable();
            $table->string('forgotten_password_selector', 255)->nullable();
            $table->string('forgotten_password_code', 255)->nullable();
            $table->unsignedInteger('forgotten_password_time')->nullable();
            $table->string('remember_selector', 255)->nullable();
            $table->string('remember_code', 255)->nullable();
            $table->unsignedInteger('created_on');
            $table->unsignedInteger('last_login')->nullable();
            $table->unsignedTinyInteger('active')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('nama_pp', 50)->nullable();
            $table->string('nik', 16)->nullable();
            $table->string('t_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kabupaten', 50)->nullable();
            $table->string('no_telp', 20)->nullable();
            $table->string('no_npwp', 30)->nullable();
            $table->string('nm_npwp', 20)->nullable();
            $table->string('no_rek', 20)->nullable();
            $table->string('nm_bank', 50)->nullable();
            $table->string('nm_rek', 50)->nullable();
            $table->string('dur_kontrak', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
