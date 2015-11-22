<?php namespace BukaData\Repositories;

use Organization as OrganizationModel;
use BukaData\Contracts\OrganizationInterface;

class Organization implements OrganizationInterface {
	
	public function all() {
		return OrganizationModel::all();
	}

}

