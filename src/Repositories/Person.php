<?php namespace BukaData\Repositories;

use Person as PersonModel;
use BukaData\Contracts\PersonInterface;
use Validator;
use Response;

class Person implements PersonInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return PersonModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return PersonModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, PersonModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        PersonModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$person = PersonModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, PersonModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $person->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$person = PersonModel::find($id)) return Response::json(null, 404);;
        if(!$person->transactions) $person->delete();
    }

}