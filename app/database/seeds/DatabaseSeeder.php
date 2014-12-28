<?php

class DatabaseSeeder extends Seeder {
 
    public function run()
    {
 
    		Eloquent::unguard();

			for ($i = 1; $i < 41; $i++) {
				DB::table('editeurs')->insert(array('nom' => str_random(rand(8, 22))));
				DB::table('auteurs')->insert(array('nom' => str_random(rand(8, 22))));
			}

			for ($i = 1; $i < 81; $i++) {
				DB::table('livres')->insert(array(
					'titre' => str_random(rand(8, 22)),
					'editeur_id' => rand(1, 40)
				));
			}

			for ($i = 1; $i < 41; $i++) {
				$number = rand(2, 8);
				for ($j = 1; $j <= $number; $j++) {
					DB::table('auteur_livre')->insert(array(
						'livre_id' => rand(1, 40),
						'auteur_id' => $i
					));
				}
			}
 
    }
}