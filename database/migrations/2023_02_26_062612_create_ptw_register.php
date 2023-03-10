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
        Schema::create('ptw_register', function (Blueprint $table) {
            $table->id();

            $table->string('ptw_no');
            $table->string('activity');
            $table->string('work_location');
            $table->string('ptw_holder');
            $table->string('date_of_approved');
            $table->string('date_of_expiry');
            $table->string('date_closed');


            $table->string('job_position')->nullable();
            $table->string('name')->nullable();
            $table->string('signature')->nullable();
            $table->string('date')->nullable();

            $table->string('approved_job_position')->nullable();
            $table->string('approved_name')->nullable();
            $table->string('approved_signature')->nullable();
            $table->string('approved_date')->nullable();

            $table->string('distributed_job_position')->nullable();
            $table->string('distributed_name')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptw_register');
    }
};
