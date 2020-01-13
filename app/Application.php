<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model 
{

    protected $table = 'application';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}