<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $guarded = ['id'];

    public function species(){
        return $this->belongsTo('App\Species');
    }

    public function characters(){
        return $this->belongsToMany('App\Character');
    }
}
