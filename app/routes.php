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

Route::get('/', 'HomeController@index');
Route::get('tentang-buka-data',  'HomeController@what');
Route::get('tim-buka-data', 'HomeController@about');
Route::get('manfaat-buka-data', 'HomeController@why');
Route::get('untuk-siapa', 'HomeController@who');
Route::get('dokumentasi-api', 'HomeController@docs');

Route::resource('api/companies', 'CompaniesController');
Route::resource('api/hierarchies', 'HierarchiesController');
Route::resource('api/organizationtypes', 'OrganizationTypesController');
Route::resource('api/organizations', 'OrganizationsController');
Route::resource('api/people', 'PeopleController');
Route::resource('api/projects', 'ProjectsController');
Route::resource('api/taxrates', 'TaxratesController');
Route::resource('api/transactions', 'TransactionsController');
Route::resource('api/uoms', 'UomsController');
Route::resource('api/users', 'UsersController');
