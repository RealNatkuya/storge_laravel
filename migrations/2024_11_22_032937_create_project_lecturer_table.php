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
        Schema::create('project_lecturer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pjlt_prj_id');
 
            $table->foreign('pjlt_prj_id')->references('id')->on('project');
            $table->unsignedBigInteger('pjlt_ltr_id');
 
            $table->foreign('pjlt_ltr_id')->references('id')->on('lecturer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_lecturer');
    }
};
