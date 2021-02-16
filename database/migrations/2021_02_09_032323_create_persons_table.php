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
            $table->unsignedInteger('maritalstatus_id')->reference('id')->on('marital_statuses');
            $table->unsignedInteger('gender_id')->reference('id')->on('genders');
            $table->unsignedInteger('familyrole_id')->refrence('id')->on('familyroles');
            $table->unsignedInteger('family_id')->refrence('id')->on('families');
            $table->date('birthdate');
            $table->string('cid');
            $table->string('sex');
            $table->string('address');
            $table->string('street');
            $table->string('postal_code');
            $table->string('city');
            $table->string('state');
            $table->unsignedInteger('profession_id')->reference('id')->on('professions');
            $table->string('email')->unique();
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('phone')->unique();
            $table->string('cnt_emerg_name');
            $table->string('cnt_emerg_phone');
            $table->string('cnt_emerg_address');
            $table->string('crt_employer_name');
            $table->string('crt_employer_phone');
            $table->string('crt_employer_address');
            $table->unsignedInteger('position_id')->reference('id')->on('positions');
            $table->unsignedInteger('person_type_id')->reference('id')->on('person_types');
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
