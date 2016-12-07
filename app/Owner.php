<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //

 public function property()
    {
        return $this->belongsTo('App\Property');
    }
    public function units()
    {
        return $this->hasMany('App\Unit', 'foreign_key'); 
    }
    protected $guarded = [];
}
