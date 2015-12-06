<?php

use BukaData\Contracts\CityInterface as CityRepo;

class CitiesController extends \BaseController {

	public function __construct(CityRepo $cityRepo)
  	{
    	$this->cityRepo  = $cityRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->cityRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->cityRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->cityRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->cityRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->cityRepo->destroy($id);
	}

}
