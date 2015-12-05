<?php namespace BukaData\Repositories;

use City as CityModel;
use BukaData\Contracts\CityInterface;

class City implements CityInterface {
    
    /**
     * @return json
     */
    public function all() {
        return CityModel::all();
    }

    

}