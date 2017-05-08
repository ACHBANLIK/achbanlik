<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionsTable extends Migration {

	public function up()
	{
		Schema::create('opinions', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('idUser')->unsigned();
			$table->tinyInteger('choice');
			$table->bigInteger('idPublication')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('opinions');
	}
}