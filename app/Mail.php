<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = ['customer_name', 'email', 'phone', 'message'];
}
