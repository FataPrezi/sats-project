<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationTable extends Migration {

	public function up()
	{
		Schema::create('information', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('titre');
			$table->string('details', 500);
			$table->string('mots_cles', 100);
		});
	}

	public function down()
	{
		Schema::drop('information');
	}
}