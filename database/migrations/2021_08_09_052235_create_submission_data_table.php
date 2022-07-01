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
        Schema::create('submission_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained();
            $table->ipAddress('visitor');
            $table->string('name');
            $table->string('email');
            $table->string('phone');          
            $table->mediumText('message');
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
        Schema::dropIfExists('submission_data');
    }
};
