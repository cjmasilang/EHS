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
        Schema::create('ehs_policies_manual', function (Blueprint $table) {
            $table->id();
            $table->string('unsafe_act');
            $table->string('unsafe_condition')->nullable();
            $table->string('recognition')->nullable();
            $table->string('environment')->nullable();
            $table->string('observe_input');
            $table->string('recommendation');
            $table->string('management_action_team');
            
            $table->tinyInteger('type')->default(0);
            $table->string('eye_and_head')->nullable();
            $table->string('hand_and_body')->nullable();
            $table->string('footwear')->nullable();
            $table->string('trained_on_mask')->nullable();
            $table->string('work_permit')->nullable();
            $table->string('toolbox_talk_conducted')->nullable();

            $table->string('proper_transition')->nullable();
            $table->string('asking_for_health')->nullable();
            $table->string('use_of_legs_lift')->nullable();
            $table->string('over_reaching')->nullable();
            $table->string('dont_twist_body')->nullable();
            $table->string('get_close_to_them')->nullable();

            $table->string('proper_footwear')->nullable();
            $table->string('aware_of_hazards')->nullable();
            $table->string('prompt_clean_up')->nullable();
            $table->string('tripping_hazards')->nullable();
            $table->string('not_rushing')->nullable();
            $table->string('step_conditions')->nullable();

            $table->string('msds')->nullable();
            $table->string('lookout_tagout')->nullable();
            $table->string('equipment_tools_are_safe')->nullable();
            $table->string('adjacent_work')->nullable();
            $table->string('signage')->nullable();
            $table->string('spill_control')->nullable();

            $table->string('location');
            $table->string('observer_name');
            $table->string('due_date');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ehs_policies_manual');
    }
};
