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
			$table->datetime('creationDate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('friends');
	}
}