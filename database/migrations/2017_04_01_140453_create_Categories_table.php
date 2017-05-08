<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('Categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('icone');
			$table->integer('idAdmin')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Categories');
	}
}