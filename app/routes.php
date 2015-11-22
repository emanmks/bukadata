<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

<<<<<<< HEAD
Route::resource('organization', 'OrganizationsController');
Route::resource('uom', 'UomsController');
Route::resource('transaction', 'TransactionsController');
=======
Route::resource('organizations', 'OrganizationsController');
Route::resource('transactions', 'TransactionsController');
>>>>>>> 0c2e42f312d18746c256506fa5c2038720884580
Route::resource('people', 'PeoplesController');
Route::resource('taxrates', 'TaxratesController');
