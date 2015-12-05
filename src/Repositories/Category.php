<?php namespace BukaData\Repositories;

use Category as CategoryModel;
use BukaData\Contracts\CategoryInterface;
use Validator;
use Response;

class Category implements CategoryInterface {
    
    /**
     * @return json
     */
    public function all() { 
        return CategoryModel::all();
    }

    /**
     * @param  string
     * @return json
     */
    public function search($param) {
        return CategoryModel::where('name','like', "%param")->get();
    }

    /**
     * @param  array
     * @return validation exception, boolean
     */
    public function store($inputs) {
        $validator = Validator::make($inputs, CategoryModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        CategoryModel::create($inputs);
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$category = CategoryModel::find($id)) return Response::json(null, 404);;

        $validator = Validator::make($inputs, CategoryModel::$rules);
        if ($validator->fails()) return $validator->messages()->toJson();
        $category->update($inputs);
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$category = CategoryModel::find($id)) return Response::json(null, 404);;
        if(!$category->transactions) $category->delete();
    }

}