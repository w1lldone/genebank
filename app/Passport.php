<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $guarded = ['id'];

    public function vegetable(){
        return $this->belongsTo('App\Vegetable');
    }
}
