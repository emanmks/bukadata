<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TransactionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $organizations = Organization::lists('id');


        foreach($organizations as $organization) {


            foreach(range(1, 100) as $index)
            {
                $project = Project::create([
                    'name' => 'Project ' . $faker->name,
                    'description' => $faker->word,
                    'long_term' => false,
                    'year_from' => $faker->numberBetween(1990, 2000),
                    'year_to' => $faker->numberBetween(2001, 2020),
                    'budget' => $faker->randomFloat(null, 999999999, 9999999999),
                    'organization_id' => $organization,
                ]);

                Transaction::create([
                    'transaction_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'source_id' => $organization,
                    'destination_id' => $faker->randomElement($organizations),
                    'object_type' => 'Service',
                    'description' => $faker->word,
                    'uom_id' => '0',
                    'amount' => $faker->randomFloat(null, 999999, 9999999),
                    'tax_id' => 0,
                    'project_id' => $project->getKey(),
                ]);
            }
        }

	}

}