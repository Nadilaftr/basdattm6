<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skill', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name'); // Nama keterampilan
            $table->integer('proficiency'); // Tingkat kemahiran
            $table->text('description')->nullable(); // Deskripsi keterampilan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill');
    }
}
