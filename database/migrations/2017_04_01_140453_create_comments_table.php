<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('idUser')->unsigned();
			$table->bigInteger('idPublication')->unsigned();
			$table->text('text');
			$table->text('image');
			$table->datetime('creationDate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}