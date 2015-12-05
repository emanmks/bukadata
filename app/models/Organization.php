<?php

class Organization extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'organization_type' => 'required|numeric',
        'hierarchy_id' => 'required|numeric',
        'parent_id' => 'required|numeric',
        'name' => 'name',
        'tax_file_number' => 'required|alpha_num',
        'reg_no' => 'required|alpha_num'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'organization_type_id',
        'hierarchy_id',
        'parent_id',
        'name',
        'tax_file_number',
        'reg_no',
        'address',
        'url',
    ];

}