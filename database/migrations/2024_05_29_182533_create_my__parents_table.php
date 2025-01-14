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
        Schema::create('my__parents', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
                        //Fatherinformation
                        $table->string('Name_Father');
                        $table->string('Phone_Father');
                        $table->string('Job_Father');
                        $table->string('Address_Father');
                        //Mother information
                        $table->string('Name_Mother');
                        $table->string('Phone_Mother');
                        $table->string('Job_Mother');
                        $table->string('Address_Mother');
                        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my__parents');
    }
};
