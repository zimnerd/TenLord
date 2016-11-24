<?php

namespace TenLord;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //

    public function property()
    {
        return $this->belongsTo('TenLord\Property');
    }
    public function unit()
    {
        return $this->belongsTo('TenLord\Unit');
    }
    protected $guarded = [];
}
