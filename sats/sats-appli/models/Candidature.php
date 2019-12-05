<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Candidature extends Eloquent {

	protected $table = 'candidature';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('id', 'nom', 'prenom', 'naissance', 'identification_nationale', 'statut', 'etudes', 'telephone', 'email');

}