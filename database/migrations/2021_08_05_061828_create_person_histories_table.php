<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('persons');
            $table->string('title');
            $table->longtext('event_description');
            $table->longtext('results');
            $table->string('pictures_array');
            $table->datetime('event_date');
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
        Schema::dropIfExists('person_histories');
    }
}
