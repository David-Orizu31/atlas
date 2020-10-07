<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    public $table = 'contactus';

    public $fillable = ['firstname','lastname','subject','mobile','email','message'];
}
