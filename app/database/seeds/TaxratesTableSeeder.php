<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TaxratesTableSeeder extends Seeder {

	public function run()
	{
		Taxrate::create(['name' => 'PPn', 'description' => 'PPn', 'taxrate_value' => '10']);
		Taxrate::create(['name' => 'PPh', 'description' => 'PPh', 'taxrate_value' => '16']);
	}

}