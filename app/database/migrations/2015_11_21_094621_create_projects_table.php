<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organization_id')->unsigned()->default(0);
			$table->string('name');
			$table->text('description');
			$table->boolean('long_term')->default(false);
			$table->integer('year_from')->unsigned();
			$table->integer('year_to')->unsigned();
			$table->double('budget',15,2)->unsigned()->default(0);
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
		Schema::drop('projects');
	}

}
