<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__parkings', function (Blueprint $table) {
            $table->increments('id');
				$table->string('name_parking');
				$table->string('address_parking');
				$table->integer('places_available');
				$table->integer('total_places');
				$table->string('user_parking');
				$table->string('pass_parking');
				$table->integer('location_id')->unsigned();
			//	$table->foreign('location_id')->references('id')->on('location');
				$table->integer('data_id')->unsigned();
			//	$table->foreign('data_id')->references('id')->on('data');
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
        Schema::dropIfExists('user__parkings');
    }
}
