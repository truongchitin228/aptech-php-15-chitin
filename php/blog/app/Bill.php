<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $filltable=['date_order','id_customer','total','created_at','updated_at'];
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public function customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
        
    }
}
