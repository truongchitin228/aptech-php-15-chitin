<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function phone()
    {
        return $this->hasOne('App\Phone','user_id');
    }
}
