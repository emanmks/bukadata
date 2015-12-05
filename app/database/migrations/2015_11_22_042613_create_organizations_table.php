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
			$table->integer('organization_type_id')->unsigned();
			$table->integer('hierarchy_id')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->default(0);
			$table->integer('state_id')->unsigned()->default(0);
			$table->integer('city_id')->unsigned()->default(0);
			$table->integer('district_id')->unsigned()->default(0);
			$table->integer('village_id')->unsigned()->default(0);
			$table->string('name');
			$table->string('tax_file_number')->nullable();
			$table->string('reg_no')->nullable();
			$table->text('address')->nullable();
			$table->string('url')->nullable();
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
