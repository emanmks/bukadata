<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        Category::create(['code' => '0001', 'transaction_types' => 'Purchase', 'name' => 'Peralatan Kantor']);
        Category::create(['code' => '0002', 'transaction_types' => 'Sales','name' => 'Peralatan Kantor']);
        Category::create(['code' => '0003', 'transaction_types' => 'Purchase', 'name' => 'Konsumsi']);
        Category::create(['code' => '0004', 'transaction_types' => 'Sales','name' => 'Konsumsi']);
        Category::create(['code' => '0005', 'transaction_types' => 'Transfer', 'name' => 'Pencairan Dana Project']);
		Category::create(['code' => '0006', 'transaction_types' => 'Receive', 'name' => 'Penerimaan Dana Project']);
	}

}