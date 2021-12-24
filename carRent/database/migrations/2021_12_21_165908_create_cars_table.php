<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('make');
            $table->string('makeModel');
            $table->string('fuel');
            $table->string('transmission');
            $table->integer('year');

            $table->string('placeRent');
            $table->integer('priceRent');
            $table->dateTime('getCar');
            $table->dateTime('returnCar');
            $table->boolean('isRent');

            $table->string('description');
            $table->string('path');
            $table->string('url');

            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('cars');
    }
}
