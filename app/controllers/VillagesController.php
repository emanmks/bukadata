<?php

use BukaData\Contracts\VillageInterface as VillageRepo;

class VillagesController extends \BaseController {

	public function __construct(VillageRepo $villageRepo)
  	{
    	$this->villageRepo  = $villageRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->villageRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->villageRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->villageRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->villageRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->villageRepo->destroy($id);
	}

}
