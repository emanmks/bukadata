<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UomsTableSeeder extends Seeder {

	public function run()
	{
		Uom::create(['code' => 'M', 'name' => 'Meter']);
		Uom::create(['code' => 'M2', 'name' => 'Meter Persegi']);
		Uom::create(['code' => 'M3', 'name' => 'Meter Kubik']);
		Uom::create(['code' => 'L', 'name' => 'Liter']);
	}

}