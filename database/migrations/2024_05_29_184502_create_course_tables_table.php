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
        Schema::create('course_tables', function (Blueprint $table) {
            $table->id();
            $table->string('start');
            $table->string('end');
            $table->string('time');
            $table->string('day');
            $table->foreignId('subject_id')->references('id')->on('Subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_tables');
    }
};
