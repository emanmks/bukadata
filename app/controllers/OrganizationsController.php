<?php

use BukaData\Contracts\OrganizationInterface as OrganizationRepo;

class OrganizationsController extends \BaseController {

	public function __construct(OrganizationRepo $organizationRepo)
  	{
    	$this->organizationRepo  = $organizationRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->organizationRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->organizationRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->organizationRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->organizationRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->organizationRepo->destroy($id);
	}

}
