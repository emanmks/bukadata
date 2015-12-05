<?php namespace BukaData\Repositories;

use District as DistrictModel;
use BukaData\Contracts\DistrictInterface;

class District implements DistrictInterface {
    
    public function all() {
        return DistrictModel::all();
    }

}