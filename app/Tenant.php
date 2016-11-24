<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //

    public function property()
    {
        return $this->belongsTo('App\Property');
    }
    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
    protected $guarded = [];
}
