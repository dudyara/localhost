<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_foods', function (Blueprint $table){
            $table->foreign('status_id')
                ->references('status_id')
                ->on('user_statuses')
                ->onDelete('cascade');
        });

        Schema::table('cat_breeds', function (Blueprint $table){
            $table->foreign('breed_food_id')
                ->references('food_id')
                ->on('cat_foods')
                ->onDelete('cascade');
        });

        Schema::table('dog_foods', function (Blueprint $table){
            $table->foreign('status_id')
                ->references('status_id')
                ->on('user_statuses')
                ->onDelete('cascade');
        });

        Schema::table('dog_breeds', function (Blueprint $table){
            $table->foreign('breed_food_id')
                ->references('food_id')
                ->on('dog_foods')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('dog_breeds', function (Blueprint $table){
            $table->dropForeign(['breed_food_id']);
        });

        Schema::table('dog_foods', function (Blueprint $table){
            $table->dropForeign(['status_id']);
        });

        Schema::table('cat_breeds', function (Blueprint $table){
            $table->dropForeign(['breed_food_id']);
        });

        Schema::table('cat_foods', function (Blueprint $table){
            $table->dropForeign(['status_id']);
        });




    }
}
