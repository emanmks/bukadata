<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrganizationTypesTableSeeder extends Seeder {

	public function run()
	{
		$organizationTypes = [
			'Instansi Pemerintah',
			'Badan Usaha Milik Negara',
			'Badan Usaha Milik Daerah',
			'Korporasi Mitra Pemerintah',
			'Partai Politik',
			'Korporasi Umum',
			'Organisasi Independen',
			'Organisasi Kemasyarakatan & Kemanusiaan',
			'Lembaga Amal Zakat & Infaq',
		];

		foreach($organizationTypes as $organizationType){
			OrganizationType::create([
				'name' => $organizationType,
				'description' => ' ',
			]);
		}
	}

}