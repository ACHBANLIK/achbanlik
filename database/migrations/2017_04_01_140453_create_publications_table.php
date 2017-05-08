<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	public function up()
	{
		Schema::create('publications', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('idUser')->unsigned();
			$table->integer('idCategory')->unsigned();
			$table->integer('type');
			$table->text('text1');
			$table->text('text2');
			$table->text('image1');
			$table->text('image2');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('publications');
	}
}