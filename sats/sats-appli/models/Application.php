<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Application extends Eloquent {

	protected $table = 'application';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}