<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
  
    public function upazillas()
    {
        
       return $this->hasMany('App\upazilla');
    }
    
}
