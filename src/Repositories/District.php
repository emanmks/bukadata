<?php namespace BukaData\Repositories;

use District as DistrictModel;
use BukaData\Contracts\DistrictInterface;
use Validator;
use Response;

class District implements DistrictInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return DistrictModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return DistrictModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, DistrictModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        DistrictModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$district = DistrictModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, DistrictModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $district->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$district = DistrictModel::find($id)) return Response::json(null, 404);;
        if(!$district->transactions) $district->delete();
    }

}