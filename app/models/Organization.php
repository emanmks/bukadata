<?php

class Organization extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'organization_type' => 'required',
        'hierarchy_id' => 'required',
        'parent_id' => 'required',
        'name' => 'name',
        'tax_file_number' => 'required',
        'reg_no' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'organization_type',
        'hierarchy_id',
        'parent_id',
        'name',
        'tax_file_number',
        'reg_no',
        'address',
        'url',
    ];

}