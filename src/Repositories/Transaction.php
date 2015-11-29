<?php namespace BukaData\Repositories;

use Transaction as TransactionModel;
use BukaData\Contracts\TransactionInterface;

class Transaction implements TransactionInterface {
	
	public function all() {
		return TransactionModel::all();
	}

}