<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('livres', function(Blueprint $table) {
			$table->foreign('auteur_id')->references('id')->on('auteurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('livres', function(Blueprint $table) {
			$table->dropForeign('livres_auteur_id_foreign');
		});
	}
}