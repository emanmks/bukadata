<?php

class Uom extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
        'code' => 'required',
		'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'code',
        'name',
        'details'
    ];

}