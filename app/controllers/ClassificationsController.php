<?php

use BukaData\Contracts\ClassificationInterface as ClassificationRepo;

class ClassificationsController extends \BaseController {

	public function __construct(ClassificationRepo $classificationRepo)
  	{
    	$this->classificationRepo  = $classificationRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->classificationRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->classificationRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->classificationRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->classificationRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->classificationRepo->destroy($id);
	}

}
