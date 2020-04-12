<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pDiagnosis extends Model
{
    
  
    public function details(){
        return $this->belongsTo('App\diagnosis','diagnosis_id','id');
    }


}
