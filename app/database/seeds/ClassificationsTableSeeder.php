<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClassificationsTableSeeder extends Seeder {

	public function run()
	{
        Classification::create(['name' => 'Teknologi Informasi']);
		Classification::create(['name' => 'Konstruksi']);
	}

}