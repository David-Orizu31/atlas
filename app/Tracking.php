<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tracking extends Model
{

    protected $fillable = [
        'date', 'location_service_area', 'checkpoint_details','people_id'
    ];
    public function people()
    {
        return $this->belongsTo('App\People');

    }
}
