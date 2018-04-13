<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function request()
    {
        return $this->hasMany('App\Request');
    }
}
