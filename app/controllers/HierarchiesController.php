<?php

use BukaData\Processors\Hierarchy as HierarchyProcessor;

class HierarchiesController extends \BaseController {

	public function __construct(HierarchyProcessor $hierarchyProcessor)
  	{
    	$this->hierarchyProcessor  = $hierarchyProcessor;
  	}
	/**
	 * Display a listing of hierarchies
	 *
	 * @return Response
	 */
	public function index()
	{
		//$hierarchies = Hierarchy::all();

		//return View::make('hierarchies.index', compact('hierarchies'));
		return $this->hierarchyProcessor->all();
	}

	/**
	 * Show the form for creating a new hierarchy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hierarchies.create');
	}

	/**
	 * Store a newly created hierarchy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Hierarchy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Hierarchy::create($data);

		return Redirect::route('hierarchies.index');
	}

	/**
	 * Display the specified hierarchy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hierarchy = Hierarchy::findOrFail($id);

		return View::make('hierarchies.show', compact('hierarchy'));
	}

	/**
	 * Show the form for editing the specified hierarchy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hierarchy = Hierarchy::find($id);

		return View::make('hierarchies.edit', compact('hierarchy'));
	}

	/**
	 * Update the specified hierarchy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$hierarchy = Hierarchy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Hierarchy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$hierarchy->update($data);

		return Redirect::route('hierarchies.index');
	}

	/**
	 * Remove the specified hierarchy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hierarchy::destroy($id);

		return Redirect::route('hierarchies.index');
	}

}
