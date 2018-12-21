<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $filltable=['amount','id_product','id_bill','created_at','updated_at'];
    public function product(){
        return $this->hasMany('App\Product','id_product','id');
    }
    public function bill(){
        return $this->belongsTo('App\Bill','id_bill','id');
        
    }
}
