<?php

namespace App\Observers;

use App\Photo;
use Illuminate\Support\Facades\Storage;

/**
 * Photo Observer
 */
class PhotoObserver
{
    public function deleting(Photo $photo)
    {
        Storage::disk($photo->getStorageDriver())->delete($photo->path);
    }
}
