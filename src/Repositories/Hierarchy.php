<?php namespace BukaData\Repositories;

use Hierarchy as HierarchyModel;
use BukaData\Contracts\HierarchyInterface;

class Hierarchy implements HierarchyInterface {
	
	public function all() {
		return HierarchyModel::all();
	}

}