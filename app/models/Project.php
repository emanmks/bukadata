<?php

class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
        'organization_id' => 'required|numeric',
		'name' => 'required',
        'long_term' => 'required|boolean',
        'year_from' => 'required|numeric',
        'year_to' => 'required|numeric',
        'budget' => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'organization_id',
        'name',
        'long_term',
        'year_from',
        'year_to',
        'budget',
		'description',
    ];

}