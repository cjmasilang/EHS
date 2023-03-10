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
        Schema::create('fire_extinguisher_inspection', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('type');
            $table->string('gauge');
            $table->string('hose');
            $table->string('cylinder');
            $table->string('pin');
            $table->string('bracket');
            $table->string('date_of_inspection');
            $table->string('knowledge_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_extinguisher_inspection');
    }
};
