<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    //
    protected $appends = ['pre'];

    public function course()
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

    protected $fillable = ['min_grade', 'pre_skills', 'pre_courses', 'course_id'];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function getPreAttribute()
    {
        $courses = Course::whereIn('id',json_decode($this['pre_courses']))->get();
        return $courses->toArray();
    }
}
