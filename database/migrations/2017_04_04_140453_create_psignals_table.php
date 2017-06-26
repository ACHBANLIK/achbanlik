<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePsignalsTable extends Migration {

	public function up()
	{
		Schema::create('psignals', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('idUser')->unsigned();
			$table->bigInteger('idPublication')->unsigned();
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
		})	;
	}


	public function down()
	{
		Schema::drop('psignals');
	}
}
