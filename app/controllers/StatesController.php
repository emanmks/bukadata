<?php

use BukaData\Contracts\StateInterface as StateRepo;

class StatesController extends \BaseController {

	public function __construct(StateRepo $stateRepo)
  	{
    	$this->stateRepo  = $stateRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->stateRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->stateRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->stateRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->stateRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->stateRepo->destroy($id);
	}

}
