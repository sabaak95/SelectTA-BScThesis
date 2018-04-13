<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function request(){
        return $this->belongsTo('App\Request');
    }


    protected $casts = [
        'skills' => 'array',
       'passedPreCourses' =>'array',
    ];
}
