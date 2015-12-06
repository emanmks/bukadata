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
Route::get('about',  'HomeController@about');
Route::get('manfaat', 'HomeController@value');
Route::get('partisipasi', 'HomeController@participation');
Route::get('bergabung', 'HomeController@registration');
Route::get('dokumentasi-api', 'HomeController@documentation');
Route::get('dashboard', 'HomeController@dashboard');

Route::group(array('prefix' => 'dashboard'), function() {
    Route::get('transactions', 'DashboardController@showTransactions');
    Route::get('profile/{id}', 'DashboardController@showProfile');
});

Route::group(array('prefix' => 'publikasi'), function() {
    Route::get('estimasi-pajak', 'PublishesController@estimateTax');
    Route::get('penyerapan-anggaran', 'PublishesController@calculateSpend');
    Route::get('ranking-integritas', 'PublishesController@generateRanking');
});

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
});