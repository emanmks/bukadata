<?php

class PublishesController extends \BaseController {

	public function estimateTax() 
	{
		return View::make('publishes.tax');
	}

	public function calculateSpend()
	{
		return View::make('publishes.spend');
	}

	public function generateRanking()
	{
		return View::make('publishes.ranking');
	}

}