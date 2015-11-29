<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HierarchiesTableSeeder extends Seeder {

	public function run()
	{
		Hierarchy::create(['name' => 'Hierarchy 1', 'description' => 'Hrc 1']);
		Hierarchy::create(['name' => 'Hierarchy 2', 'description' => 'Hrc 2']);
		Hierarchy::create(['name' => 'Hierarchy 3', 'description' => 'Hrc 3']);
	}

}