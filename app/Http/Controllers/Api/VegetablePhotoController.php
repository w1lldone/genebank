<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotosResource;
use App\Photo;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetablePhotoController extends Controller
{
    public function store(Request $request, Vegetable $vegetable, Photo $photo)
    {
        $request->validate([
            'photo' => 'required|image',
            'name' => 'string|nullable',
        ]);

        $driver = $photo->getStorageDriver();

        // UPLOAD IMAGE
        $path = $request->photo->store("photos/vegetables/$vegetable->id", $driver);

        // UPDATE PHOTOS 
        $photo = $vegetable->photos()->create([
            'name' => $request->name,
            'path' => $path,
            'driver' => $driver,
        ]);

        return new PhotosResource($photo);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return response(null, 204);
    }
}
