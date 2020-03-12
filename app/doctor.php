<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    //
    public function office(){
        return $this->belongsTo("App\office");
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
    public function profile(){
        return $this->hasOne("App\doctorProfile",'user_id','user_id');
    }
    public  function otherDegrees(){
        return $this->hasMany('App\doctorOtherDegree','user_id','user_id');
    }


}
