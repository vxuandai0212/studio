<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['name', 'url_image', 'is_slide_show'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
