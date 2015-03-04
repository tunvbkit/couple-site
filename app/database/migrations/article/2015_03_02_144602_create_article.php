<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('articles',function($table){
			$table->increments("id");
			$table->string('title');
			$table->string("description");
			$table->string("content");
			$table->integer("taxonomy");
			$table->string('slug')->nullable();	
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
		//
		Schema::drop("articles");
	}

}
