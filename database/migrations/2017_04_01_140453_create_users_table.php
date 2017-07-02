<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('password', 60)->nullable();
            $table->string('provider')->nullable();;
            $table->string('provider_id')->nullable();
			$table->string('lname');
			$table->string('fname');
			$table->string('photo')->default('all/user_avatar.png');
			$table->boolean('status')->default(true);
			$table->integer('idCountry')->unsigned()->nullable()->default(149);
			$table->date('birthday')->nullable();
			$table->integer('points')->default(0);
            $table->rememberToken(); 	
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
		})	;
	}

	public function down()
	{
		Schema::drop('users');
	}
}