<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = ['location', 'email', 'phone'];
}
