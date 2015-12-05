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
		
		$this->call('HierarchiesTableSeeder');
		$this->command->info('Hierarchy table seeded!'); // This is good but unnecessary
		
		$this->call('OrganizationTypesTableSeeder');
		$this->command->info('Organization type table seeded!');

		//$this->call('OrganizationsTableSeeder');
		//$this->command->info('Organization table seeded!');

		$this->call('PeopleTableSeeder');
		$this->command->info('People table seeded!');

		$this->call('ProjectsTableSeeder');
		$this->command->info('Project table seeded!');
		
		$this->call('TaxratesTableSeeder');
		$this->command->info('Taxrate table seeded!');
		
		$this->call('TransactionsTableSeeder');
		$this->command->info('Transaction table seeded!');
		
		$this->call('UomsTableSeeder');
		$this->command->info('Uom table seeded!');
		
		$this->call('UsersTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('InstansiDKIJakartaTableSeeder');
		$this->command->info('Organization DKI Jakarta table seeded!');

    	$this->call('KorporasiTableSeeder');
		$this->command->info('Korporasi table seeded!');
	}

}
