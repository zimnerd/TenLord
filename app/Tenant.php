<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
    
    
    protected $guarded = [];
}
