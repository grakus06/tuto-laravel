<?php

class AuteurTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('auteurs')->delete();

		// AuteurTableSeeder
		Auteur::create(array(
				'nom' => JohnDoe
			));
	}
}