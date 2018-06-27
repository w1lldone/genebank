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
        return $this->belongsToMany('App\Character')->withPivot('value');
    }

    public function getCharacters()
    {
        $categories = \App\Category::getCategoryCharacters();

        return $this->characters()->whereIn('category_id', $categories)->get();
    }
}
