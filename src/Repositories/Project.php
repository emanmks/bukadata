<?php namespace BukaData\Repositories;

use Project as ProjectModel;
use BukaData\Contracts\ProjectInterface;
use Validator;
use Response;

class Project implements ProjectInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return ProjectModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return ProjectModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, ProjectModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        ProjectModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$project = ProjectModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, ProjectModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $project->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$project = ProjectModel::find($id)) return Response::json(null, 404);;
        if(!$project->transactions) $project->delete();
    }

}