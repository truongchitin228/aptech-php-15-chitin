<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $filltable=['fullname','gender','email','phone','address','created_at','updated_at'];
    public function bill(){
        return $this->hasMany('App\Bill','id_bill','id');
    }
}
