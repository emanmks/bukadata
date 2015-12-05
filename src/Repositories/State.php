<?php namespace BukaData\Repositories;

use State as StateModel;
use BukaData\Contracts\StateInterface;
use Validator;
use Response;

class State implements StateInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return StateModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return StateModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, StateModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        StateModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$state = StateModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, StateModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $state->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$state = StateModel::find($id)) return Response::json(null, 404);;
        if(!$state->transactions) $state->delete();
    }

}