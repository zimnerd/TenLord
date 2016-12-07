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

    public function tenants()
    {
        return $this->hasMany('App\Tenant');
    }

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
    protected $guarded = [];
}

$unit = Unit::find(1);