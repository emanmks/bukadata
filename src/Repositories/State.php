<?php namespace BukaData\Repositories;

use State as StateModel;
use BukaData\Contracts\StateInterface;

class State implements StateInterface {
    
    public function all() {
        return StateModel::all();
    }

}