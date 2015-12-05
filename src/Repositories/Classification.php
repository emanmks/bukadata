<?php namespace BukaData\Repositories;

use Classification as ClassificationModel;
use BukaData\Contracts\ClassificationInterface;
use Validator;
use Response;

class Classification implements ClassificationInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return ClassificationModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return ClassificationModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, ClassificationModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        ClassificationModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$classification = ClassificationModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, ClassificationModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $classification->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$classification = ClassificationModel::find($id)) return Response::json(null, 404);;
        if(!$classification->transactions) $classification->delete();
    }

}