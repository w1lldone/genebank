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

    public function passport(){
        return $this->hasOne('App\Passport');
    }

    public function generatePIN()
    {
        return 'UGM'.str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Get characters collection based on category_id
     * @param  array  $categories array of category id
     * @return Collection
     */
    public function getCharacters($categories = [])
    {
        return $this->characters()->whereIn('category_id', $categories)->get();
    }
}
