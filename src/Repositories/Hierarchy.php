<?php namespace BukaData\Repositories;

use Hierarchy as HierarchyModel;
use BukaData\Contracts\HierarchyInterface;
use Validator;
use Response;

class Hierarchy implements HierarchyInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return HierarchyModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return HierarchyModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, HierarchyModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        HierarchyModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$hierarchy = HierarchyModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, HierarchyModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $hierarchy->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$hierarchy = HierarchyModel::find($id)) return Response::json(null, 404);;
        if(!$hierarchy->transactions) $hierarchy->delete();
    }

}