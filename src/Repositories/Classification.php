<?php namespace BukaData\Repositories;

use Classification as ClassificationModel;
use BukaData\Contracts\ClassificationInterface;

class Classification implements ClassificationInterface {
    
    public function all() {
        return ClassificationModel::all();
    }

}