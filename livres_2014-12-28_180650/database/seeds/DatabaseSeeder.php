<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('AuteurTableSeeder');
		$this->command->info('Auteur table seeded!');
	}
}