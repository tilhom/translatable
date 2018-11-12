<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use \Dimsav\Translatable\Translatable;
    //trait
    public $translatedAttributes = ['name'];
    protected $fillable = ['code'];
}
