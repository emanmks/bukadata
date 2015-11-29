<?php namespace BukaData\Repositories;

use OrganizationType as OrganizationTypeModel;
use BukaData\Contracts\OrganizationTypeInterface;

class OrganizationType implements OrganizationTypeInterface {
	
	public function all() {
		return OrganizationTypeModel::all();
	}

}