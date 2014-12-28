<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivresTable extends Migration {

	public function up()
	{
		Schema::create('livres', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('auteur_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('livres');
	}
}