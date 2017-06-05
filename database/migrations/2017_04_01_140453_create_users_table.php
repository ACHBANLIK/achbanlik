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
			$table->boolean('status')->default(true);
			$table->integer('idCountry')->unsigned()->nullable();
			$table->integer('idCity')->unsigned()->nullable();
			$table->date('birthday')->nullable();
			$table->text('photo')->nullable();
			$table->integer('points')->default(0);
            $table->rememberToken(); 	
			$table->timestamps();
		})	;
	}

	public function down()
	{
		Schema::drop('users');
	}
}