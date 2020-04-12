<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pNecropsy extends Model
{
    public function details(){
        return $this->belongsTo('App\necropsy','necropsy_id','id');
    }
}
