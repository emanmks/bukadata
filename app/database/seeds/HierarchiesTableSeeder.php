<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HierarchiesTableSeeder extends Seeder {

	public function run()
	{
		Hierarchy::create(['name' => 'Tingkat Pusat', 'details' => 'Tingkat Pusat']);
		Hierarchy::create(['name' => 'Tingkat I', 'details' => 'Tingkat Propinsi']);
        Hierarchy::create(['name' => 'Tingkat II', 'details' => 'Tingkat Kota / Kabupaten']);
        Hierarchy::create(['name' => 'Tingkat Kecamatan', 'details' => 'Tingkat Kecamatan']);
		Hierarchy::create(['name' => 'Tingkat Kelurahan / Desa', 'details' => 'Tingkat Kelurahan / Desa']);
	}

}