<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('fname');
			$table->string('lname');
			$table->tinyInteger('role');
			$table->datetime('creationDate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}