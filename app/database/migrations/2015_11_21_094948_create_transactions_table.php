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
			$table->integer('category_id')->unsigned();
			$table->integer('tax_id')->unsigned();
			$table->enum('objects', array('Money','Goods', 'Service'))->default('Money');
			$table->integer('source_id');
			$table->integer('destination_id');
			$table->date('transaction_date');
			$table->integer('uom_id')->unsigned();
			$table->text('details');
			$table->double('amount', 15, 2);
			$table->float('discount')->unsigned()->default(0);
			$table->double('discount_amount', 15, 2)->default(0);
			$table->boolean('tax_inclusive')->unsigned()->default(0);
			$table->boolean('is_deleted')->unsigned()->default(0);
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
