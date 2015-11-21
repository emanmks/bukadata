<?php

class UomsController extends \BaseController {

	/**
	 * Display a listing of uoms
	 *
	 * @return Response
	 */
	public function index()
	{
		$uoms = Uom::all();

		return View::make('uoms.index', compact('uoms'));
	}

	/**
	 * Show the form for creating a new uom
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('uoms.create');
	}

	/**
	 * Store a newly created uom in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Uom::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Uom::create($data);

		return Redirect::route('uoms.index');
	}

	/**
	 * Display the specified uom.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$uom = Uom::findOrFail($id);

		return View::make('uoms.show', compact('uom'));
	}

	/**
	 * Show the form for editing the specified uom.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$uom = Uom::find($id);

		return View::make('uoms.edit', compact('uom'));
	}

	/**
	 * Update the specified uom in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$uom = Uom::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Uom::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$uom->update($data);

		return Redirect::route('uoms.index');
	}

	/**
	 * Remove the specified uom from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Uom::destroy($id);

		return Redirect::route('uoms.index');
	}

}
