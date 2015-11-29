<?php namespace BukaData\Repositories;

use Person as PersonModel;
use BukaData\Contracts\PersonInterface;

class Person implements PersonInterface {
	
	public function all() {
		return PersonModel::all();
	}

}