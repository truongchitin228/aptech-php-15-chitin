<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $filltable=['name','description','created_at','updated_at'];
    public function product(){
        return $this->hasMany('App\Product','id_type','id');
    }
}
