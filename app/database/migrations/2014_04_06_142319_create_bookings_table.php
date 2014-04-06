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
			$table->integer('room_id', false, true);
			$table->integer('room_available_date_id', false, true);
			
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('user_id')
			->references('id')->on('users')
			->onDelete('cascade');
			
			$table->foreign('room_id')
			->references('id')->on('rooms')
			->onDelete('cascade');
			
			$table->foreign('room_available_date_id')
			->references('id')->on('room_available_dates')
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
