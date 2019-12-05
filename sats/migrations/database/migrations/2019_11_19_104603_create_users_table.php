<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->string('email', 50);
			$table->bigInteger('telephone');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}