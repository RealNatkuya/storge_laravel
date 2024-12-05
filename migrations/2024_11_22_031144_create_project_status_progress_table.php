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
        Schema::create('project_status_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pjsp_prj_id');
 
            $table->foreign('pjsp_prj_id')->references('id')->on('project');
            $table->unsignedBigInteger('pjsp_pjs_id');
 
            $table->foreign('pjsp_pjs_id')->references('id')->on('project_status');
            $table->date('pjsp_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_status_progress');
    }
};
