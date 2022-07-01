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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('page_heading');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('meta_keywords');
            $table->text('meta_description');
            $table->string('SKU');
            $table->string('amazon_link');
            $table->decimal('price')->nullable();
            $table->integer('length');
            $table->integer('height');
            $table->integer('width');
            $table->integer('weight');
            $table->string('main_image');
            $table->string('small_image');            
            $table->boolean('status');
            $table->string('alias');
            $table->string('weight_unit_id');
            $table->foreignId('category_id')->constrained();            
            $table->foreignId('manufacturer_id')->constrained();            
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
        Schema::dropIfExists('products');
    }
};
