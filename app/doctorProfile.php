<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctorProfile extends Model
{
    
    public function other_degrees(){
        return $this->hasMany('App\doctorOtherDegree','user_id','id');
    }
}
