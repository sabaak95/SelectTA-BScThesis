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
    public function req(){
        return $this->belongsTo('App\Req');
    }
    protected $fillable = ['grade', 'skills', 'passed_pre','user_id','req_id'];



}
