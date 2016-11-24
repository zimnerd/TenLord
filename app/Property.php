<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public function units()
    {
        return $this->hasMany('App\Unit');
    }

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
    public function tenants()
    {
        return $this->hasMany('App\Tenant');
    }

    protected $guarded = [];
}
