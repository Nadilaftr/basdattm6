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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama kontak
            $table->string('email')->unique(); // Email kontak
            $table->string('telepon')->nullable(); // Nomor telepon (bisa null)
            $table->text('alamat')->nullable(); // Alamat kontak (bisa null)
            $table->string('instansi')->nullable(); // Nama perusahaan (bisa null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
