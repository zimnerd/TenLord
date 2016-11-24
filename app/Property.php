<?php

namespace TenLord;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public function units()
    {
        return $this->hasMany('TenLord\Unit');
    }

    public function owner()
    {
        return $this->belongsTo('TenLord\Owner');
    }
    public function tenants()
    {
        return $this->hasMany('TenLord\Tenant');
    }

    protected $guarded = [];
}
