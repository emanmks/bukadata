<?php

use BukaData\Contracts\DistrictInterface as DistrictRepo;

class DistrictsController extends \BaseController {

	public function __construct(DistrictRepo $district)
  	{
    	$this->district  = $district;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->district->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->district->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->district->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->district->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->district->destroy($id);
	}

}
