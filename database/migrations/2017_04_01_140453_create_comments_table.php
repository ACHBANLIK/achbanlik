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
			$table->boolean('status')->default(1);
			$table->text('image')->nullable();
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}