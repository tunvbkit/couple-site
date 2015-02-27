
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors',function($table){
			$table->engine = 'MyISAM'; 
			$table->increments('id');
			$table->string('name');
			$table->integer('user');
			$table->string('address');
			$table->string('phone');
			$table->string('website');
			$table->string('avatar');
			$table->longText('about');
			$table->integer('album');
			$table->longText('video');
			$table->longText('map');
			$table->integer('category');
			$table->integer('location');
			$table->string('slug')->nullable();
			$table->integer('click');
			$table->timestamps();
		});
		DB::statement('ALTER TABLE vendors ADD FULLTEXT search(name)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::table('vendors', function($table) {
	            $table->dropIndex('search');
	        });
		Schema::drop('vendors');
	}

}
