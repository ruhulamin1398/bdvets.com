<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    
    public function doctors(){
        return $this->hasMany("App\user");

    }  
}
