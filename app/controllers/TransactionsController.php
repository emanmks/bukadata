<?php

use BukaData\Contracts\TransactionInterface as TransactionRepo;
use BukaData\Contracts\ProjectInterface as ProjectProcessor;
use BukaData\Contracts\CategoryInterface as CategoryRepo;
use BukaData\Contracts\TaxrateInterface as TaxrateRepo;
use BukaData\Contracts\UomInterface as UomRepo;

class TransactionsController extends BaseController {

	public function __construct(UomRepo $uomRepo, TaxrateRepo $taxrateRepo, CategoryRepo $categoryRepo, ProjectProcessor $projectProcessor, TransactionRepo $transactionRepo)
  	{
    	$this->transactionRepo  = $transactionRepo;
    	$this->projectProcessor = $projectProcessor;
    	$this->categoryRepo = $categoryRepo;
    	$this->taxrateRepo = $taxrateRepo;
    	$this->uomRepo = $uomRepo;
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

	public function registration()
	{
		$projects = $this->projectProcessor->all()->lists("name", "id");
		$categories = $this->categoryRepo->all()->lists("name", "id");
		$taxes = $this->taxrateRepo->all()->lists("name", "id");
		$uoms = $this->uomRepo->all()->lists("name", "id");
		return View::make('transactions.create', compact('projects', 'categories', 'taxes', 'uoms'));
	}
	
}
