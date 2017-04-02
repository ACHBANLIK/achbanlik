<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('password');
			$table->string('email')->unique();
			$table->string('lname');
			$table->string('fname');
			$table->integer('idCountry')->unsigned();
			$table->integer('idCity')->unsigned();
			$table->date('birhday');
			$table->text('picture');
			$table->integer('points');
			$table->datetime('creationDate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}