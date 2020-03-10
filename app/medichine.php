<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medichine extends Model
{
    public function category()
    {
        return $this->belongsTo('App\MedichineCategory','medichine_category_id','id');
    }

}
