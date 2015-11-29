<?php namespace BukaData\Repositories;

use User as UserModel;
use BukaData\Contracts\UserInterface;

class User implements UserInterface {
	
	public function all() {
		return UserModel::all();
	}

}