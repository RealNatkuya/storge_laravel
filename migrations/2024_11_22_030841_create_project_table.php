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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->integer('prj_year');
            $table->string('prj_name_th');
            $table->string('prj_name_en');
            $table->unsignedBigInteger('prj_pjs_id');
 
            $table->foreign('prj_pjs_id')->references('id')->on('project_status');
            $table->unsignedBigInteger('prj_pjt_id');
 
            $table->foreign('prj_pjt_id')->references('id')->on('project_type');
            $table->unsignedBigInteger('prj_ltr_id');
 
            $table->foreign('prj_ltr_id')->references('id')->on('lecturer');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
