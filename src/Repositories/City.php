<?php namespace BukaData\Repositories;

use City as CityModel;
use BukaData\Contracts\CityInterface;
use Validator;
use Response;

class City implements CityInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return CityModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return CityModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, CityModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        CityModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$city = CityModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, CityModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $city->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$city = CityModel::find($id)) return Response::json(null, 404);;
        if(!$city->transactions) $city->delete();
    }

}