<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pAdvice extends Model
{
    public function details(){
        return $this->belongsTo('App\advice','advice_id','id');
    }
}
