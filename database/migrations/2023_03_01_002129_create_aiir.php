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
        Schema::create('aiir', function (Blueprint $table) {
            $table->id();
            $table->string('area_name');
            $table->string('reported_date');
            $table->string('aiir_no');
            $table->string('work_location');
            $table->string('name_of_supervisor');
            $table->string('name_of_manager');
            $table->string('employee_name');
            $table->string('employee_no');
            $table->string('age');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('position');
            $table->string('month_with_company');
            $table->string('month_with_department');
            $table->string('date_of_employer');
            $table->string('activity_accident');
            $table->string('medical_treatment')->nullable();
            $table->string('first_aid')->nullable();
            $table->string('restricted')->nullable();
            $table->string('lta')->nullable();
            $table->string('fatality')->nullable();
            $table->string('property_damage')->nullable();
            $table->string('pilferage')->nullable();
            $table->string('others')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aiir');
    }
};
