<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('Categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('photo')->default('all/category.png');
			$table->integer('idAdmin')->unsigned();
			$table->timestamp('updated_at')->useCurrent();
			$table->timestamp('created_at')->useCurrent();
		});
	}

	public function down()
	{
		Schema::drop('Categories');
	}
}