<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $filltable=['link','image'];
    public $timestamps = false; 
}
