<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    public function farmer(){
        return $this->belongsTo('App\Farmer');
    }

       public function doctor(){
        return $this->hasOne("App\doctor",'user_id','user_id');
    }
    public function species(){
        return $this->hasOne('App\pSpeacies');
    }
    public function complain(){
        return $this->hasOne('App\pComplain');
    }
    public function signs(){
        return $this->hasMany('App\pClinicalSign');
    }
    public function diagnosis(){
        return $this->hasMany('App\pDiagnosis');
    }
    public function necropsies(){
        return $this->hasMany('App\pNecropsy');
    }
    public function advices(){
        return $this->hasMany('App\pAdvice');
    }
}
