<?php

class Taxrate extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'taxrate_value' => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'name',
        'taxrate_value'
    ];

}