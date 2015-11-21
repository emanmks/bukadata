<?php

class TaxratesController extends \BaseController {

	/**
	 * Display a listing of taxrates
	 *
	 * @return Response
	 */
	public function index()
	{
		$taxrates = Taxrate::all();

		return View::make('taxrates.index', compact('taxrates'));
	}

	/**
	 * Show the form for creating a new taxrate
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('taxrates.create');
	}

	/**
	 * Store a newly created taxrate in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Taxrate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Taxrate::create($data);

		return Redirect::route('taxrates.index');
	}

	/**
	 * Display the specified taxrate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$taxrate = Taxrate::findOrFail($id);

		return View::make('taxrates.show', compact('taxrate'));
	}

	/**
	 * Show the form for editing the specified taxrate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$taxrate = Taxrate::find($id);

		return View::make('taxrates.edit', compact('taxrate'));
	}

	/**
	 * Update the specified taxrate in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$taxrate = Taxrate::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Taxrate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$taxrate->update($data);

		return Redirect::route('taxrates.index');
	}

	/**
	 * Remove the specified taxrate from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Taxrate::destroy($id);

		return Redirect::route('taxrates.index');
	}

}
