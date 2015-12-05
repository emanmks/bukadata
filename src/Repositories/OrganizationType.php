<?php namespace BukaData\Repositories;

use OrganizationType as OrganizationTypeModel;
use BukaData\Contracts\OrganizationTypeInterface;
use Validator;
use Response;

class OrganizationType implements OrganizationTypeInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return OrganizationTypeModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return OrganizationTypeModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, OrganizationTypeModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        OrganizationTypeModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$organizationtype = OrganizationTypeModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, OrganizationTypeModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $organizationtype->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$organizationtype = OrganizationTypeModel::find($id)) return Response::json(null, 404);;
        if(!$organizationtype->transactions) $organizationtype->delete();
    }

}