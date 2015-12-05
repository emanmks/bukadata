<?php

class District extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'city_id' => 'required|numeric',
        'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['city_id','name'];

}