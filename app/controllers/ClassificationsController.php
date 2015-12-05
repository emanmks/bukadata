<?php

class ClassificationsController extends \BaseController {

	/**
	 * Display a listing of classifications
	 *
	 * @return Response
	 */
	public function index()
	{
		$classifications = Classification::all();

		return View::make('classifications.index', compact('classifications'));
	}

	/**
	 * Show the form for creating a new classification
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('classifications.create');
	}

	/**
	 * Store a newly created classification in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Classification::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Classification::create($data);

		return Redirect::route('classifications.index');
	}

	/**
	 * Display the specified classification.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$classification = Classification::findOrFail($id);

		return View::make('classifications.show', compact('classification'));
	}

	/**
	 * Show the form for editing the specified classification.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$classification = Classification::find($id);

		return View::make('classifications.edit', compact('classification'));
	}

	/**
	 * Update the specified classification in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$classification = Classification::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Classification::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$classification->update($data);

		return Redirect::route('classifications.index');
	}

	/**
	 * Remove the specified classification from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Classification::destroy($id);

		return Redirect::route('classifications.index');
	}

}
