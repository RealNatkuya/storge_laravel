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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('std_sid');
            $table->string('std_fname');
            $table->string('std_lname');
            $table->unsignedBigInteger('std_ttl_id');
 
            $table->foreign('std_ttl_id')->references('id')->on('title');
            $table->unsignedBigInteger('std_pgm_id');
 
            $table->foreign('std_pgm_id')->references('id')->on('program');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
