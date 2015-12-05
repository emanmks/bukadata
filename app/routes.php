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

Route::group(array('prefix' => 'api'), function() {
    Route::resource('categories', 'CategoriesController');
    Route::resource('hierarchies', 'HierarchiesController');
    Route::resource('organizationtypes', 'OrganizationTypesController');
    Route::resource('organizations', 'OrganizationsController');
    Route::resource('people', 'PeopleController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('taxrates', 'TaxratesController');
    Route::resource('transactions', 'TransactionsController');
    Route::resource('uoms', 'UomsController');
    Route::resource('users', 'UsersController');
});