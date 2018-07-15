<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function childern(){
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function attributes(){
        return $this->hasMany('App\Attribute');
    }

    /**
     * Get category ids array
     * @return static
     */
    public static function getCategoryCharacters()
    {
        return static::where('parent_id', 1)->get()->pluck('id');
    }
}
