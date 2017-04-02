<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('englishName');
			$table->string('frenchName');
			$table->string('arabicName');
			$table->string('localName');
			$table->datetime('creationDate');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}