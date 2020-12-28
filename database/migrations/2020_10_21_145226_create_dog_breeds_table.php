<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_breeds', function (Blueprint $table) {
            $table->bigIncrements('breed_id');
            $table->string('breed_name',20);
            $table->string('breed_length_of_life',20);
            $table->string('breed_max_size',20);
            $table->string('breed_type',20);
            $table->string('breed_description',100);
            $table->unsignedBigInteger('breed_food_id');

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
        Schema::dropIfExists('dog_breeds');
    }
}
