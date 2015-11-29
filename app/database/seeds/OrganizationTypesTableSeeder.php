<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationTypesTableSeeder extends Seeder {

	public function run()
	{
		OrganizationType::create(['name' => 'Organization 1', 'description' => 'Org 1']);
		OrganizationType::create(['name' => 'Organization 2', 'description' => 'Org 2']);
		OrganizationType::create(['name' => 'Organization 3', 'description' => 'Org 3']);
	}

}