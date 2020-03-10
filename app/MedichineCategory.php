<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedichineCategory extends Model
{

    public  function medichines(){
        return $this->hasMany('App\medichine');
    }
}
