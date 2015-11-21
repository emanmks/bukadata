<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->date('transaction_date');
			$table->morphs('source');
			$table->morphs('destination');
			$table->enum('object_type', array('Goods', 'Service'));
			$table->text('description');
			$table->integer('uom_id')->unsigned();
			$table->double('amount', 15, 2);
			$table->integer('tax_id')->unsigned();
			$table->double('discount', 15, 2)->default(0);
			$table->double('discount_amount', 15, 2)->default(0);
			$table->tinyInteger('is_deleted')->unsigned()->default(0);
			$table->timestamp('deleted_at')->nullable();
			$table->integer('deleted_by')->unsigned()->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
