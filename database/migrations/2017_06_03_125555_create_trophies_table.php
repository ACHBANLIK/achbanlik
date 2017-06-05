<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrophiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
 Schema::create('trophies', function(Blueprint $table) {

    $table->increments('id');
    $table->string('name');
    $table->longText('description');
    $table->integer('points');
    $table->string('photo')->default('all/trophy-award-icon.jpg');
    $table->rememberToken();    
    $table->timestamps();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
                Schema::drop('trophies');
    }
}
