<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class union extends Model
{
    
    public function villages()
    {
        
       return $this->hasMany('App\village');
    }
}
