<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('images', function(Blueprint $table)
		{
			$table->string('largethumb', 255);
			$table->boolean('main_image');
			$table->string('dirname', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('images', function(Blueprint $table)
		{
			$table->dropColumn('largethumb');
			$table->dropColumn('main_image');
			$table->dropColumn('dirname');
		});
	}

}
