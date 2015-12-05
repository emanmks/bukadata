<?php namespace BukaData\Repositories;

use Category as CategoryModel;
use BukaData\Contracts\CategoryInterface;

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
        if ($validator->fails()) return $validator;
        if (Category::create($data)) return true;
        return false;
    }

    /**
     * @param  integer
     * @param  arrray
     * @return not found eloquent exception, validation exception, boolean
     */
    public function update($id, $inputs) {
        if(!$category = CategoryModel::findOrFail($id)) return $category;

        $validator = Validator::make($inputs, CategoryModel::$rules);
        if ($validator->fails()) return $validator;
        if ($category->update($)) return true;
        return false;
    }

    /**
     * @param  integer
     * @return not found eloquent exception, boolean
     */
    public function destroy($id) {
        if(!$category = CategoryModel::findOrFail($id)) return $category;
        if(!$category->transactions) $category->delete();
        return false;
    }

}