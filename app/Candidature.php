<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidature extends Model 
{

    protected $table = 'candidature';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('id', 'nom', 'prenom', 'naissance', 'identification_nationale', 'statut', 'etudes', 'telephone', 'email');

}