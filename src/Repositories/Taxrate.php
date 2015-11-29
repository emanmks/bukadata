<?php namespace BukaData\Repositories;

use Taxrate as TaxrateModel;
use BukaData\Contracts\TaxrateInterface;

class Taxrate implements TaxrateInterface {
	
	public function all() {
		return TaxrateModel::all();
	}

}