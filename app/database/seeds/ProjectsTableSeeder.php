<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Project::create([
				'name' => 'Project ' . $faker->name,
				'deetails' => $faker->word,
				'long_term' => false,
				'year_from' => $faker->numberBetween(1990,2000),
				'year_to' => $faker->numberBetween(2001,2020),
				'budget' => $faker->randomFloat(null, 999999999, 9999999999)
			]);
		}
	}

}