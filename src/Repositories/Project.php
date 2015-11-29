<?php namespace BukaData\Repositories;

use Project as ProjectModel;
use BukaData\Contracts\ProjectInterface;

class Project implements ProjectInterface {
	
	public function all() {
		return ProjectModel::all();
	}

}