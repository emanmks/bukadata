<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'email' => $faker->email,
				'password' => $faker->word,
				'person_id' => 0,
				'mobile' => '000',
				'organization_id' => $faker->numberBetween(1,10),
				'remember_token' => $faker->word
			]);
		}
	}

}