<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('picture_profile');
            $table->foreignId('maritalstatus_id')->constrained('marital_statuses');
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('familyrole_id')->constrained('family_roles');
            $table->foreignId('family_id')->constrained('families');
            $table->date('birthdate');
            $table->string('cid');
            $table->string('sex');
            $table->string('address');
            $table->string('street');
            $table->string('postal_code');
            $table->string('city');
            $table->string('state');
            $table->foreignId('profession_id')->constrained('professions');
            $table->string('email')->unique();
            $table->string('url_linkedin');
            $table->string('url_twitter');
            $table->string('url_facebook');
            $table->string('url_instagram');
            $table->string('mobile_phone');
            $table->string('work_phone');
            $table->string('home_phone');
            $table->string('cnt_emerg_name');
            $table->string('cnt_emerg_phone');
            $table->string('cnt_emerg_address');
            $table->string('crt_employer_name');
            $table->string('crt_employer_phone');
            $table->string('crt_employer_address');
            $table->foreignId('position_id')->constrained('positions');
            $table->foreignId('person_type_id')->constrained('person_types');
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
        Schema::dropIfExists('persons');
    }
}
