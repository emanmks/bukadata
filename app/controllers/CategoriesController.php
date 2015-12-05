<?php

use BukaData\Contracts\CategoryInterface as CategoryRepo;

class CategoriesController extends \BaseController {

	public function __construct(CategoryRepo $categoryRepo)
  	{
    	$this->categoryRepo  = $categoryRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->categoryRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->categoryRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();
		return $this->categoryRepo->store($inputs);
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inputs = Input::all();
		return $this->categoryRepo->update($id, $inputs);
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->categoryRepo->update($id);
	}

}
