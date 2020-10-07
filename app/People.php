<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class People extends Model
{
    public function trackings()
    {
        return $this->hasMany('App\Tracking', 'people_id')->orderBy('id','DESC');;

    }
}
