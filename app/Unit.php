<?php

namespace TenLord;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    public function property()
    {
        return $this->belongsTo('TenLord\Property');
    }

    public function tenant()
    {
        return $this->hasMany('TenLord\Tenant');
    }
    protected $guarded = [];
}
