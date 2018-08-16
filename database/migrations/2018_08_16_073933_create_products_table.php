<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('name');
            $table->integer('status');
            $table->string('description');
            $table->string('model');
            $table->string('tag');
            $table->string('location');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('tax');
            $table->date('dateAvailable');
            $table->integer('weight');
            $table->string('length');
            $table->string('height');
            $table->string('width');
            $table->string('vendorName');
            $table->string('vendorLocation');
            $table->integer('discount');
            $table->integer('rewardPoints');
            $table->string('color');
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
}
