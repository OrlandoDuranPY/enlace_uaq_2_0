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
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('slug');
            $table->string('email');
            $table->string('phone');
            $table->text('about_me');
            $table->foreignId('study_program_id')->constrained('study_programs')->nullable();
            $table->integer('semester')->nullable();
            $table->json('academic_achievement')->nullable();
            $table->enum('academic_program', ['practices', 'job'])->nullable();
            $table->json('study_level')->nullable();
            $table->json('main_degree')->nullable();
            $table->json('experience')->nullable();
            $table->json('project')->nullable();
            $table->json('reference');
            $table->enum('type', ['student', 'graduate', 'teacher']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
