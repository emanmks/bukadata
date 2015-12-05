<?php namespace BukaData\Repositories;

use Village as VillageModel;
use BukaData\Contracts\VillageInterface;

class Village implements VillageInterface {
    
    public function all() {
        return VillageModel::all();
    }

}