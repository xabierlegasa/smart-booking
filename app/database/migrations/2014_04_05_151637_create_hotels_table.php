<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
			$table->increments('id');
			$table->enum('type', array('hotel', 'hostel', 'apartment', 'holyday_home', 'villa', 'guest_house', 'bed_and_breakfast', 'boat'));
			$table->string('name');
			$table->string('address');
			$table->tinyInteger('stars');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hotels');
	}

}
