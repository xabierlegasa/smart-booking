<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hotel_id', false, true);
			$table->integer('space', false, true);
			$table->enum('status', array('activated', 'deactivated'));
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
		Schema::drop('rooms');
	}

}
