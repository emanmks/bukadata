<?php

class InstitutionsController extends \BaseController {

	/**
	 * Display a listing of institutions
	 *
	 * @return Response
	 */
	public function index()
	{
		$institutions = Institution::all();

		return View::make('institutions.index', compact('institutions'));
	}

	/**
	 * Show the form for creating a new institution
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('institutions.create');
	}

	/**
	 * Store a newly created institution in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Institution::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Institution::create($data);

		return Redirect::route('institutions.index');
	}

	/**
	 * Display the specified institution.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$institution = Institution::findOrFail($id);

		return View::make('institutions.show', compact('institution'));
	}

	/**
	 * Show the form for editing the specified institution.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$institution = Institution::find($id);

		return View::make('institutions.edit', compact('institution'));
	}

	/**
	 * Update the specified institution in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$institution = Institution::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Institution::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$institution->update($data);

		return Redirect::route('institutions.index');
	}

	/**
	 * Remove the specified institution from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Institution::destroy($id);

		return Redirect::route('institutions.index');
	}

}
