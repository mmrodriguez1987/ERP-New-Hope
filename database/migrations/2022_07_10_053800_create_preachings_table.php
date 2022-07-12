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
        Schema::create('preachings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('devotional_id')->constrained();
            $table->string('title');
            $table->string('bible_quote');
            $table->date('preaching_date');
            $table->string('observation');
            $table->string('aplicattion');
            $table->string('prayer');
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
        Schema::dropIfExists('preachings');
    }
};
