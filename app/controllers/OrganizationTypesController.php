<?php

use BukaData\Contracts\OrganizationTypeInterface as OrganizationTypeRepo;

class OrganizationTypesController extends \BaseController {

	public function __construct(OrganizationTypeRepo $organizationTypeRepo)
  	{
    	$this->organizationTypeRepo  = $organizationTypeRepo;
  	}
	
	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->organizationTypeRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->organizationTypeRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->organizationTypeRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->organizationTypeRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->organizationTypeRepo->destroy($id);
	}

}
