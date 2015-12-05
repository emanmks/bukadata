<?php

class VillagesController extends \BaseController {

	/**
	 * Display a listing of villages
	 *
	 * @return Response
	 */
	public function index()
	{
		$villages = Village::all();

		return View::make('villages.index', compact('villages'));
	}

	/**
	 * Show the form for creating a new village
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('villages.create');
	}

	/**
	 * Store a newly created village in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Village::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Village::create($data);

		return Redirect::route('villages.index');
	}

	/**
	 * Display the specified village.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$village = Village::findOrFail($id);

		return View::make('villages.show', compact('village'));
	}

	/**
	 * Show the form for editing the specified village.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$village = Village::find($id);

		return View::make('villages.edit', compact('village'));
	}

	/**
	 * Update the specified village in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$village = Village::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Village::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$village->update($data);

		return Redirect::route('villages.index');
	}

	/**
	 * Remove the specified village from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Village::destroy($id);

		return Redirect::route('villages.index');
	}

}
