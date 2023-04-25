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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tel');
            $table->boolean('practitioner');
            $table->boolean('volunteer');
            $table->string('expertise')->nullable();
            $table->string('quals')->nullable();
            $table->string('reg_body')->nullable();
            $table->string('b_name')->nullable();
            $table->string('website')->nullable();
            $table->boolean('liability_ins')->nullable();
            $table->text('volunteer_skills')->nullable();
            $table->boolean('accept_priv_pol');
            $table->string('signature');
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
        Schema::dropIfExists('affiliates');
    }
};
