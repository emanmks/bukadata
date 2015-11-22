<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropInstitutionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('institutions');
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
			$table->integer('hierarchy_id')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->default(0);
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->timestamps();
		});
	}

}
