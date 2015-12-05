<?php

class Transaction extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'project_id' => 'required|numeric',
        'transaction_date' => 'required|date_format:yyyy-mm-dd',
        'source_id' => 'required|numeric',
        'destination_id' => 'required|numeric',
        'object_type' = ''
	];

	// Don't forget to fill this array
	protected $fillable = [
        ''
    ];

}