<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index(Request $request)
    {
        return Vegetable::all();
    }

    public function show(Vegetable $vegetable)
    {
        return $vegetable->load('characters');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'species_id' => 'required|exists:species,id',
            'plant_introduction_number' => 'required|string|unique:vegetables',
            'cultivar_name' => 'nullable|string',
            'donor_number' => 'nullable|integer',
            'country' => 'nullable|string',
            'location' => 'nullable|string',
            'year' => 'nullable|digits:4',
            'season' => 'nullable|string',
            'collecting_institute' => 'nullable|string',
            'collector' => 'nullable|string',
            'collecting_number' => 'nullable|string',
            'latitide' => 'nullable|string',
            'longitude' => 'nullable|string',
            'altitude' => 'nullable|string',
        ]);

        $vegetable = Vegetable::create($data);

        return $vegetable;
    }
}
