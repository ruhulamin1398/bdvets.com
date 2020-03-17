<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
        public function village()
        {
           return $this->belongsTo('App\village');
        }
}
