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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_location');
            $table->string('job_title');
            $table->string('slug');
            $table->string('salary')->nullable();
            $table->string('schedule');
            $table->text('description');
            $table->text('observations')->nullable();
            $table->integer('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
