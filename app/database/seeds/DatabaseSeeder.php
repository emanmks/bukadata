<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('OrganizationsTableSeeder');
		$this->command->info('Organization table seeded!');

		$this->call('UomsTableSeeder');
		$this->command->info('Uom table seeded!');
	}

}
