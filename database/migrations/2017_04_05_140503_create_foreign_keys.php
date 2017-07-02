<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('idCountry')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});	

		Schema::table('publications', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('publications', function(Blueprint $table) {
			$table->foreign('idCategory')->references('id')->on('Categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('publications', function(Blueprint $table) {
			$table->foreign('idType')->references('id')->on('Types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});		
		Schema::table('Categories', function(Blueprint $table) {
			$table->foreign('idAdmin')->references('id')->on('admins')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('opinions', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('opinions', function(Blueprint $table) {
			$table->foreign('idPublication')->references('id')->on('publications')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('idPublication')->references('id')->on('publications')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->foreign('idUser1')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->foreign('idUser2')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->foreign('idUserAction')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});


		Schema::table('utrophies', function(Blueprint $table) {
			$table->foreign('idTrophy')->references('id')->on('trophies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

		Schema::table('utrophies', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

		Schema::table('psignals', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		
		Schema::table('psignals', function(Blueprint $table) {
			$table->foreign('idPublication')->references('id')->on('publications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});



	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_idCountry_foreign');
		});
		Schema::table('publications', function(Blueprint $table) {
			$table->dropForeign('publications_idUser_foreign');
		});
		Schema::table('publications', function(Blueprint $table) {
			$table->dropForeign('publications_idCategory_foreign');
		});
		Schema::table('publications', function(Blueprint $table) {
			$table->dropForeign('publications_idType_foreign');
		});
		Schema::table('Categories', function(Blueprint $table) {
			$table->dropForeign('Categories_idAdmin_foreign');
		});
		Schema::table('opinions', function(Blueprint $table) {
			$table->dropForeign('opinions_idUser_foreign');
		});
		Schema::table('opinions', function(Blueprint $table) {
			$table->dropForeign('opinions_idPublication_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_idUser_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_idPublication_foreign');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->dropForeign('friends_idUser1_foreign');
		});
		Schema::table('friends', function(Blueprint $table) {
			$table->dropForeign('friends_idUser2_foreign');
		});
		Schema::table('utrophies', function(Blueprint $table) {
			$table->dropForeign('utrophies_idTrophy_foreign');
		});
		Schema::table('utrophies', function(Blueprint $table) {
			$table->dropForeign('utrophies_idUser_foreign');
		});

		Schema::table('psignals', function(Blueprint $table) {
			$table->dropForeign('psignals_idPublication_foreign');
		});

		Schema::table('psignals', function(Blueprint $table) {
			$table->dropForeign('psignals_idUser_foreign');
		});


	}
}