<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;

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