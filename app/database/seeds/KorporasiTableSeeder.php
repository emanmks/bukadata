<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class KorporasiTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $organizationTypes = OrganizationType::where('name','=','Korporasi Umum')
            ->orWhere('name','=','Korporasi Mitra Pemerintah')
            ->lists('id');

		foreach(range(1, 100) as $index)
		{
			Organization::create([
				'organization_type_id' => $faker->randomElement($organizationTypes),
				'hierarchy_id' => 0,
				'parent_id' => 0,
				'name' => $faker->company,
				'tax_file_number' => str_random(15),
				'reg_no' => str_random(12),
				'address' => $faker->address,
				'url' => $faker->domainName

			]);
		}
	}

}