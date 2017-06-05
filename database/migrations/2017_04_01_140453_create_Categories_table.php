<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('Categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->longText('description');
			$table->string('icone')->default('public/sm-img-2.jpg');
			$table->integer('idAdmin')->unsigned();
			$table->rememberToken();    
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Categories');
	}
}