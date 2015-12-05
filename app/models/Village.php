<?php

class Village extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'district_id' => 'required|numeric',
        'name' => 'description'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'district_id',
        'name'
    ];

}