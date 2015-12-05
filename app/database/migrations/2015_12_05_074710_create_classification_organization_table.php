<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassificationOrganizationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classification_organization', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('classification_id')->unsigned()->index();
			$table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
			$table->integer('organization_id')->unsigned()->index();
			$table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
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
		Schema::drop('classification_organization');
	}

}
