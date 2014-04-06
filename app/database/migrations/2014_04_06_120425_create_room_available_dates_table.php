<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAvailableDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_available_dates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('room_id', false, true);
			$table->smallInteger('year', false, true);
			$table->tinyInteger('month', false, true);
			$table->tinyInteger('day', false, true);
			$table->integer('to_days', false, true);
			$table->enum('status', array('open', 'booked', 'closed'));
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('room_id')->references('id')->on('rooms');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('room_available_dates');
	}

}
