<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUTrophiesTable extends Migration {

	public function up()
	{
		Schema::create('utrophies', function(Blueprint $table) {
		    $table->increments('id');
		    $table->bigInteger('idUser')->unsigned();
			$table->integer('idTrophy')->unsigned();
		    $table->timestamp('updated_at')->useCurrent();
		    $table->timestamp('created_at')->useCurrent();
		});
	}

	public function down()
	{
		Schema::drop('utrophies');
	}
}