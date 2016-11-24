<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    public function property()
    {
        return $this->belongsTo('App\Property');
    }

    public function tenant()
    {
        return $this->hasMany('App\Tenant');
    }
    protected $guarded = [];
}
