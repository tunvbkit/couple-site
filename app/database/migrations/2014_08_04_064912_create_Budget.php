
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudget extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budget',function($table)
			{
				$table->increments("id");
				$table->integer('category');
				$table->string('item');
				$table->float('range1');
				$table->float('range2');
				$table->float('range3');
				$table->float('range4');
				$table->float('range5');
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
		Schema::drop('budget');
	}

}
