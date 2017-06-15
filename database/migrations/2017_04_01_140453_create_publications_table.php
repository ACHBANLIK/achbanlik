<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	public function up()
	{
		Schema::create('publications', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title')->length(100);
			$table->bigInteger('idUser')->unsigned();
			$table->integer('idCategory')->unsigned();
			$table->integer('idType')->unsigned();
			$table->boolean('status')->default(true);
			$table->boolean('privacy')->default(true);
			$table->integer('signals')->default(0);
			$table->text('text1')->nullable();
			$table->text('text2')->nullable();
			$table->text('image1')->nullable();
			$table->text('image2')->nullable();
			$table->timestamp('date_fin')->useCurrent();
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
			});
	}

	public function down()
	{
		Schema::drop('publications');
	}
}