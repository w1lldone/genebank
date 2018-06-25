<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
