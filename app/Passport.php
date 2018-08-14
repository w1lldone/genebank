<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['incoming_date', 'collecting_date'];

    public function vegetable(){
        return $this->belongsTo('App\Vegetable');
    }
}
