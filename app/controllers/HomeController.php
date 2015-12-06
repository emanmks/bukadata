<?php

use BukaData\Contracts\OrganizationTypeInterface as OrganizationTypeRepo;
use BukaData\Contracts\HierarchyInterface as HierarchyProcessor;
use BukaData\Contracts\CityInterface as CityRepo;
use BukaData\Contracts\DistrictInterface as District;
use BukaData\Contracts\VillageInterface as VillageRepo;

class HomeController extends BaseController {

	public function __construct(VillageRepo $villageRepo, OrganizationTypeRepo $organizationTypeRepo, HierarchyProcessor $hierarchyProcessor, CityRepo $cityRepo, District $district)
  	{
    	$this->organizationTypeRepo  = $organizationTypeRepo;
    	$this->hierarchyProcessor  = $hierarchyProcessor;
    	$this->cityRepo  = $cityRepo;
    	$this->district = $district;
    	$this->villageRepo = $villageRepo;
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
		$organizationTypes = $this->organizationTypeRepo->all()->lists("name","id");
		$hierarchies = $this->hierarchyProcessor->all()->lists("name","id");
		$cities = $this->cityRepo->all()->lists("name", "id");
		$districts = $this->district->all()->lists("name", "id");
		$villages = $this->villageRepo->all()->lists("name", "id");

		return View::make('home.registration', compact('villages','organizationTypes', 'hierarchies', 'cities', 'districts'));

	}

	public function documentation()
	{
		return View::make('home.documentation');
	}

}
