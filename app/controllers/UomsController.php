<?php

use BukaData\Contracts\UomInterface as UomRepo;

class UomsController extends \BaseController {

	public function __construct(UomRepo $uomRepo)
  	{
    	$this->uomRepo  = $uomRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->uomRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->uomRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->uomRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->uomRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->uomRepo->destroy($id);
	}

}
