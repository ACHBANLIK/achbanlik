<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFriendsTable extends Migration {

	public function up()
	{
		Schema::create('friends', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('idUser1')->unsigned();
			$table->bigInteger('idUser2')->unsigned();
			$table->tinyInteger('status');
			$table->bigInteger('idUserAction')->unsigned();
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
	});	
	}
	public function down()
	{
		Schema::drop('friends');
	}
}