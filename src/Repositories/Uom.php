<?php namespace BukaData\Repositories;

use Uom as UomModel;
use BukaData\Contracts\UomInterface;

class Uom implements UomInterface {
	
	public function all() {
		return UomModel::all();
	}

}