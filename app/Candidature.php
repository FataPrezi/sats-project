<?php

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidature extends Eloquent 
{

    protected $table = 'candidature';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'nom', 'prenom', 'naissance', 'identification_nationale', 'statut', 'etudes', 'telephone', 'email'];

}