<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Information extends Eloquent {

	protected $table = 'information';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('id', 'titre', 'details', 'mots_cles');

}