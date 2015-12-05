<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Person::create([
				'name' => $faker->name,
				'tax_file_number' => str_random(15),
				'reg_no' => str_random(12),
				'address' => $faker->address
			]);
		}
	}

}