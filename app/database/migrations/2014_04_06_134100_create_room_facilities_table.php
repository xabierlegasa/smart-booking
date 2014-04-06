<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_facilities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('room_id', false, true);
			$table->enum('bathroom', array('private', 'shared'));
			
			$table->timestamps();
			$table->softDeletes();
			
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
		Schema::drop('room_facilities');
	}

}
