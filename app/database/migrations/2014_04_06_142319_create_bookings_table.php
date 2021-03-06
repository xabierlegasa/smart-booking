<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id', false, true);
			$table->integer('hotel_id', false, true);
			$table->integer('room_id', false, true);
			$table->smallInteger('year', false, true);
			$table->tinyInteger('month', false, true);
			$table->tinyInteger('day', false, true);
			$table->integer('to_days', false, true);
			$table->float('total');
			$table->enum('currency', array('euro', 'dollar', 'pund'));
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('user_id')
			->references('id')->on('users')
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
		Schema::drop('bookings');
	}

}
