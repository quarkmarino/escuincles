<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('galleries', function(Blueprint $table)
		{
			$table->string('title', 64);
			$table->string('comment', 255);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('galleries', function(Blueprint $table)
		{
			$table->dropColumn('title');
			$table->dropColumn('comment');
		});
	}

}
