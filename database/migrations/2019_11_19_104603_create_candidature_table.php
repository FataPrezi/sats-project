<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatureTable extends Migration {

	public function up()
	{
		Schema::create('candidature', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->datetime('naissance');
			$table->string('identification_nationale', 50);
			$table->string('statut', 50);
			$table->string('etudes', 50);
			$table->bigInteger('telephone');
			$table->string('email', 50)->unique();
		});
	}

	public function down()
	{
		Schema::drop('candidature');
	}
}