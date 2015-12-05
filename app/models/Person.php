<?php

class Person extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'tax_file_number' => 'required|alpha_num'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'name',
        'tax_file_number',
        'address'
    ];

}