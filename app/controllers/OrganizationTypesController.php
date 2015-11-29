<?php

use BukaData\Processors\OrganizationType as OrganizationTypeProcessor;

class OrganizationTypesController extends \BaseController {

	public function __construct(OrganizationTypeProcessor $organizationTypeProcessor)
  	{
    	$this->organizationTypeProcessor  = $organizationTypeProcessor;
  	}
	/**
	 * Display a listing of organizationtypes
	 *
	 * @return Response
	 */
	public function index()
	{
		//$organizationtypes = Organizationtype::all();

		//return View::make('organizationtypes.index', compact('organizationtypes'));
		return $this->organizationTypeProcessor->all();
	}

	/**
	 * Show the form for creating a new organizationtype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organizationtypes.create');
	}

	/**
	 * Store a newly created organizationtype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Organizationtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Organizationtype::create($data);

		return Redirect::route('organizationtypes.index');
	}

	/**
	 * Display the specified organizationtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$organizationtype = Organizationtype::findOrFail($id);

		return View::make('organizationtypes.show', compact('organizationtype'));
	}

	/**
	 * Show the form for editing the specified organizationtype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$organizationtype = Organizationtype::find($id);

		return View::make('organizationtypes.edit', compact('organizationtype'));
	}

	/**
	 * Update the specified organizationtype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$organizationtype = Organizationtype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Organizationtype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$organizationtype->update($data);

		return Redirect::route('organizationtypes.index');
	}

	/**
	 * Remove the specified organizationtype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Organizationtype::destroy($id);

		return Redirect::route('organizationtypes.index');
	}

}
