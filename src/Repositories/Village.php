<?php namespace BukaData\Repositories;

use Village as VillageModel;
use BukaData\Contracts\VillageInterface;
use Validator;
use Response;

class Village implements VillageInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return VillageModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return VillageModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, VillageModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        VillageModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$village = VillageModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, VillageModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $village->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$village = VillageModel::find($id)) return Response::json(null, 404);;
        if(!$village->transactions) $village->delete();
    }

}