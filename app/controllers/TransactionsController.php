<?php

use BukaData\Contracts\TransactionInterface as TransactionRepo;

class TransactionsController extends \BaseController {

	public function __construct(TransactionRepo $transactionRepo)
  	{
    	$this->transactionRepo  = $transactionRepo;
  	}

	/**
	 * Display a listing of categories
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->transactionRepo->all();
	}

	public function search()
	{
		if(Input::has('param')) return $this->transactionRepo->search(Input::get('param'));
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->transactionRepo->store(Input::all());
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->transactionRepo->update($id, Input::all());
	}

	/**
	 * Remove the specified category from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->transactionRepo->destroy($id);
	}

}
