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

}
