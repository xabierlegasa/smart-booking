<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotel_facilities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id', false, true);
			$table->boolean('wifi');
			$table->boolean('parking');
			$table->boolean('airport_shuttle');
			$table->boolean('fitness_centre');
			$table->boolean('non_smoking_rooms');
			$table->boolean('indoor_pool');
			$table->boolean('spa_wellness_centre');
			$table->boolean('pets_allowed');
			$table->boolean('restarurant');			
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('hotel_id')
			->references('id')->on('hotels')
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
		Schema::drop('hotel_facilities');
	}

}
