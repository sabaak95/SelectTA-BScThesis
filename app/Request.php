<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    public function courses()
    {
        return $this->belongsTo('App\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function offer()
    {
        return $this->hasMany('App\Offer');
    }
    protected $casts = [
        'preSkills' => 'array',
        'preCourses' =>'array',
    ];
}
