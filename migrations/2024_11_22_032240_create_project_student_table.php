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
        Schema::create('project_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pjst_prj_id');
 
            $table->foreign('pjst_prj_id')->references('id')->on('project');
            $table->unsignedBigInteger('pjst_std_id');
 
            $table->foreign('pjst_std_id')->references('id')->on('student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_student');
    }
};
