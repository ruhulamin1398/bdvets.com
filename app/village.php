<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class village extends Model
{
    public function farmers()
    {
       return $this->hasMany('App\Farmer');
    }

}
