<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent {

	protected $table = 'users';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom', 'prenom', 'email', 'telephone');

	public function informer()
	{
		return $this->hasMany('Information');
	}

	public function creer()
	{
		return $this->hasOne('Candidature');
	}

	public function connecter()
	{
		return $this->hasOne('Application');
	}

}