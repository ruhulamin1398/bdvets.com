<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upazilla extends Model
{
    public function unions()
    {
        
       return $this->hasMany('App\union');
    }
}
