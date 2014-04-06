<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking_days', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('booking_id', false, true);
			$table->integer('hotel_id', false, true);
			$table->integer('room_id', false, true);
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('booking_id')
			->references('id')->on('bookings')
			->onDelete('cascade');
			
			$table->foreign('hotel_id')
			->references('id')->on('hotels')
			->onDelete('cascade');
			
			$table->foreign('room_id')
			->references('id')->on('rooms')
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
		Schema::drop('booking_days');
	}

}
