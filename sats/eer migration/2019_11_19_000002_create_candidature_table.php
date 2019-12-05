<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatureTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'candidature';

    /**
     * Run the migrations.
     * @table candidature
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom', 45)->nullable();
            $table->string('prenom', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->integer('telephone')->nullable();
            $table->date('naissance')->nullable();
            $table->string('identification', 45)->nullable();
            $table->string('statut', 45)->nullable();
            $table->string('etudes', 45)->nullable();
            $table->integer('users_id');

            $table->index(["users_id"], 'fk_candidature_users1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_candidature_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
