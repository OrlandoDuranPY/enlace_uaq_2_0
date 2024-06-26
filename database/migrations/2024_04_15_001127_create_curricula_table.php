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
            $table->foreignId('study_program_id')->nullable();
            $table->integer('semester')->nullable();
            $table->json('academic_achievement');
            $table->enum('academic_program', ['practices', 'job'])->nullable();
            $table->json('study_level')->nullable();
            $table->string('main_degree')->nullable();
            $table->json('experience');
            $table->json('project');
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
