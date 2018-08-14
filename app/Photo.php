<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $guarded = ['id'];

    public function photoable()
    {
        return $this->morphTo();
    }

    public function getStorageDriver()
    {
        return 'public';
    }

    public function getPhotoUrlAttribute(){
        return Storage::disk($this->driver)->url($this->path);
    }
        
}
