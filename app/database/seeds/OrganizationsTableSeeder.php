<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Organization::create([
				'organization_type' => 0,
				'hierarchy_id' => 0,
				'parent_id' => 0,
				'name' => $faker->name,
				'tax_file_number' => str_random(15),
				'reg_no' => str_random(12),
				'address' => $faker->word,
				'url' => $faker->domainName
			]);
		}
	}

}