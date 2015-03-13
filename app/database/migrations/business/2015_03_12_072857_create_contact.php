<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContact extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('contacts',function($table){
			$table->increments("id");
			$table->string('user');
			$table->string('email');
			$table->string('phone');
			$table->date('weddingdate');
			$table->string('title');
			$table->string("content");
			$table->integer('active');
			$table->integer('vendor');	
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
		Schema::drop("contacts");
	}

}
