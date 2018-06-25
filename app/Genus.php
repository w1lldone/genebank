<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    protected $guarded = ['id'];

    public function species(){
        return $this->hasMany('App\Species');
    }
}
