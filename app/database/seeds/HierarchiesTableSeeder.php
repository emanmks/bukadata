<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HierarchiesTableSeeder extends Seeder {

	public function run()
	{
		Hierarchy::create(['name' => 'Tingkat Pusat', 'description' => 'Tingkat Pusat']);
		Hierarchy::create(['name' => 'Tingkat I', 'description' => 'Tingkat Propinsi']);
        Hierarchy::create(['name' => 'Tingkat II', 'description' => 'Tingkat Kota / Kabupaten']);
        Hierarchy::create(['name' => 'Tingkat Kecamatan', 'description' => 'Tingkat Kecamatan']);
		Hierarchy::create(['name' => 'Tingkat Kelurahan / Desa', 'description' => 'Tingkat Kelurahan / Desa']);
	}

}