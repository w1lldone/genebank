<?php

namespace App\Listeners;

use App\Events\NewPhotoUploaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class DeleteOldPhoto
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewPhotoUploaded $event)
    {
        if (Storage::disk('public')->exists($event->photo)) {
            Storage::disk('public')->delete($event->photo);
        }
    }
}
