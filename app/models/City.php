<?php

class City extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'state_id' => 'required|numeric',
        'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'state_id',
        'name'
    ];

}