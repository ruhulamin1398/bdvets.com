<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pClinicalSign extends Model
{
  
    public function details(){
        return $this->belongsTo('App\clinicalSign','clinical_sign_id','id');
    }
}
