<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function req()
    {
        return $this->hasMany('App\Req');
    }
//    public function reqs(){
//        return $this->belongsToMany('App\Req');
 //   }
}
