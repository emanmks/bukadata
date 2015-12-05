<?php

class Organization extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
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