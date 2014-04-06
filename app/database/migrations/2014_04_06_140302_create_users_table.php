<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use SMART\Classes\UserStatus;
use SMART\Classes\Gender;


class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->enum('status', UserStatus::getSimpleArray())->default(UserStatus::TO_BE_CONFIRMED);
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->enum('gender', Gender::getSimpleArray())->default(Gender::MALE);
			$table->date('birthdate');
			$table->string('birthdate_code', 4);
			$table->integer('age');
			$table->string('city_id');
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
		//
	}

}
