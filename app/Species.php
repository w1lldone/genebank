<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $guarded = ['id'];

    public function genus(){
        return $this->belongsTo('App\Genus');
    }

    public function vegetables(){
        return $this->hasMany('App\Vegetable');
    }
}
