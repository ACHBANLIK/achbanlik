<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('englishName', 55);
			$table->string('frenchName', 55);
			$table->string('arabicName', 55);
			$table->string('localName', 55);
			$table->integer('idCountry')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}