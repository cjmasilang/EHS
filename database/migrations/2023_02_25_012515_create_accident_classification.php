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
        Schema::create('accident_classification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_aid')->nullable();
            $table->string('medical_case')->nullable();
            $table->string('fatality')->nullable();
            $table->string('near_miss')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_classification');
    }
};
