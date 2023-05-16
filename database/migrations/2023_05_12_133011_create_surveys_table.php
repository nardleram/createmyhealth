<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city_town')->nullable();
            $table->string('postcode')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('age_range')->nullable();
            $table->string('leeds_locale')->nullable();
            $table->string('current_health_status')->nullable();
            $table->string('current_health_conditions')->nullable();
            $table->string('healthcare_barriers_none')->nullable();
            $table->string('healthcare_barriers_waiting_lists')->nullable();
            $table->string('healthcare_barriers_costs')->nullable();
            $table->string('other_barriers')->nullable();
            $table->string('healthcare_barriers_other')->nullable();
            $table->string('more_info_wanted')->nullable();
            $table->string('help_w_costs')->nullable();
            $table->string('support_groups')->nullable();
            $table->string('education_workshops')->nullable();
            $table->string('more_local')->nullable();
            $table->string('accessible_childcare')->nullable();
            $table->string('practitioners_directory')->nullable();
            $table->string('other_healthcare_services')->nullable();
            $table->string('other_healthcare_services_specified')->nullable();
            $table->string('holistic_therapies')->nullable();
            $table->string('first_aid')->nullable();
            $table->string('dementia')->nullable();
            $table->string('home_remedies')->nullable();
            $table->string('mental_health')->nullable();
            $table->string('nutritional_health')->nullable();
            $table->string('homeopathy')->nullable();
            $table->string('childrens_health')->nullable();
            $table->string('meditation')->nullable();
            $table->string('other_educational_services')->nullable();
            $table->string('other_educational_services_specified')->nullable();
            $table->string('offer_practitioner_professional')->nullable();
            $table->string('offer_skills_volunteer')->nullable();
            $table->string('offer_space_resources')->nullable();
            $table->string('leeds_org_offer_help')->nullable();
            $table->string('loan_equipment')->nullable();
            $table->string('i_can_help_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};
