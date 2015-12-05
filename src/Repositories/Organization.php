<?php namespace BukaData\Repositories;

use Organization as OrganizationModel;
use BukaData\Contracts\OrganizationInterface;
use Validator;
use Response;

class Organization implements OrganizationInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return OrganizationModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return OrganizationModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, OrganizationModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        OrganizationModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$organization = OrganizationModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, OrganizationModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $organization->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$organization = OrganizationModel::find($id)) return Response::json(null, 404);;
        if(!$organization->transactions) $organization->delete();
    }

}