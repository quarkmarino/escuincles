<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gallery_id')->unsigned();
			$table->string('name', 255);
			$table->string('file', 255);
			$table->string('thumb', 255);
			$table->string('minithumb', 255);
			$table->string('slide', 255);
			$table->integer('status');
			$table->text('tags');
			$table->text('comment');
			$table->timestamps();

			$table->foreign('gallery_id')->references('id')->on('galleries')
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
