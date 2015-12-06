<?php

use BukaData\Processors\Hierarchy as HierarchyProcessor;

class HierarchiesController extends \BaseController {

	public function __construct(HierarchyProcessor $hierarchyProcessor)
  	{
    	$this->hierarchyProcessor  = $hierarchyProcessor;
  	}
  	
	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->hierarchyProcessor->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->hierarchyProcessor->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->hierarchyProcessor->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->hierarchyProcessor->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->hierarchyProcessor->destroy($id);
	}

}
