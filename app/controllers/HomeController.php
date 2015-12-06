<?php

use BukaData\Contracts\OrganizationTypeInterface as OrganizationTypeRepo;

class HomeController extends BaseController {

	public function __construct(OrganizationTypeRepo $organizationTypeRepo)
  	{
    	$this->organizationTypeRepo  = $organizationTypeRepo;
  	}

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}	

	public function about()
	{
		return View::make('home.about');
	}

	public function value()
	{
		return View::make('home.value');
	}

	public function participation()
	{
		return View::make('home.participation');
	}

	public function registration()
	{
		$organizationTypes = $this->OrganizationTypeRepo->all()->lists("name","id");
		return View::make('home.registration', compact('organizationTypes'));
	}

	public function documentation()
	{
		return View::make('home.documentation');
	}

	public function dashboard()
	{
		return View::make('home.dashboard');
	}

}
