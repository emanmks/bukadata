<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organization_type')->unsigned();
			$table->integer('hierarchy_id')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->default(0);
			$table->string('name');
			$table->string('tax_file_number');
			$table->string('reg_no');
			$table->text('address');
			$table->string('url');
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
		Schema::drop('organizations');
	}

}
