<?php

use BukaData\Contracts\PeopleInterface as PeopleRepo;

class PeopleController extends \BaseController {

	public function __construct(PeopleRepo $peopleRepo)
  	{
    	$this->peopleRepo  = $peopleRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->peopleRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->peopleRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->peopleRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->peopleRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->peopleRepo->destroy($id);
	}

}
