<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PassportsResource;
use App\Http\Resources\VegetablesResource;
use App\Vegetable;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function show($vegetable)
    {
        $vegetable = Vegetable::where('plant_introduction_number', $vegetable)->with('passport')->firstOrFail();

        return new VegetablesResource($vegetable);
    }

    public function update(Vegetable $vegetable, Request $request)
    {   
        $data = $request->validate([
            'donor_number' => 'nullable|string',
            'country' => 'nullable|string',
            'location' => 'nullable|string',
            'collecting_institute' => 'nullable|string',
            'collector' => 'nullable|string',
            'collecting_number' => 'nullable|string',
            'collecting_date' => 'nullable|date',
            'latitide' => 'nullable|string',
            'longitude' => 'nullable|string',
            'altitude' => 'nullable|string',
        ]);

        $passport = $vegetable->passport;
        $passport->update($data);

        return new PassportsResource($passport);
    }
}
