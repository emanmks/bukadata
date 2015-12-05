<?php namespace BukaData\Repositories;

use Taxrate as TaxrateModel;
use BukaData\Contracts\TaxrateInterface;
use Validator;
use Response;

class Taxrate implements TaxrateInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return TaxrateModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return TaxrateModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, TaxrateModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        TaxrateModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$taxrate = TaxrateModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, TaxrateModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $taxrate->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$taxrate = TaxrateModel::find($id)) return Response::json(null, 404);;
        if(!$taxrate->transactions) $taxrate->delete();
    }

}