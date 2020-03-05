<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
   public function districts()
   {
       
      return $this->hasMany('App\district');
   }
   
   
}
