<?php

use BukaData\Contracts\TaxrateInterface as TaxrateRepo;

class TaxratesController extends \BaseController {

	public function __construct(TaxrateRepo $taxrateRepo)
  	{
    	$this->taxrateRepo  = $taxrateRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->taxrateRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->taxrateRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->taxrateRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->taxrateRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->taxrateRepo->destroy($id);
	}

}
