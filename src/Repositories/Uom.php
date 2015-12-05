<?php namespace BukaData\Repositories;

use Uom as UomModel;
use BukaData\Contracts\UomInterface;
use Validator;
use Response;

class Uom implements UomInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return UomModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return UomModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, UomModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        UomModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$uom = UomModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, UomModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $uom->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$uom = UomModel::find($id)) return Response::json(null, 404);;
        if(!$uom->Uoms) $uom->delete();
    }

}