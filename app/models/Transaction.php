<?php

class Transaction extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
        'project_id' => 'required|numeric',
        'category_id' => 'required|numeric',
        'tax_id' => 'required|numeric',
        'objects' => 'required',
        'source_id' => 'required|numeric',
        'destination_id' => 'required|numeric',
        'transaction_date' => 'required|numeric',
        'uom_id' => 'required|numeric',
        'amount' => 'required|numeric',
        'tax_inclusive' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'project_id',
        'category_id',
        'tax_id',
        'objects',
        'source_id',
        'destination_id',
        'transaction_date',
        'uom_id',
        'details',
        'amount',
        'discount',
        'discount_amount',
        'tax_inclusive',
        'is_deleted',
        'deleted_at',
        'deleted_by'
    ];

}