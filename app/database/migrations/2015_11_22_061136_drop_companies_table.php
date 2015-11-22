<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('companies');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('institutions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('tax_file_number');
			$table->string('reg_no')->nullable();
			$table->text('address')->nullable();
			$table->timestamps();
		});
	}

}
