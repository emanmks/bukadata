<?php

class Category extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'code' => 'required|alpha_num',
        'transaction_types' => 'required',
        'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'code',
        'transaction_types',
        'name',
        'details'
    ];

}