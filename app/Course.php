<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function majors()
    {
        return $this->belongsToMany('App\Major');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function subscribed_users()
    {
        return $this->belongsToMany('App\User','subscribe');
    }


}
