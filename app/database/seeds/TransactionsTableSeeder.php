<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TransactionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Transaction::create([
				'transaction_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'source_id' => $faker->numberBetween(1,10),
				'destination_id' => $faker->numberBetween(1,10),
				'object_type' => 'Service',
				'description' => $faker->word,
				'uom_id' => '0',
				'amount' => $faker->randomFloat(null, 999999, 9999999),
				'tax_id' => 0,
				'project_id' => 0,
			]);
		}
	}

}