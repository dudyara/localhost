<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_foods', function (Blueprint $table) {
            $table->bigIncrements('food_id');
            $table->string('food_name',20);
            $table->integer('food_value');
            $table->integer('food_quantity');
            $table->string('food_type',20);
            $table->unsignedBigInteger('status_id');

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
        Schema::dropIfExists('dog_foods');
    }
}

