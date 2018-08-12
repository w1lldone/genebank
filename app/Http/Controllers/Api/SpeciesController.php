<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpeciesResource;
use App\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function index(Request $request)
    {
        return SpeciesResource::collection(Species::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'genus_id' => 'required|integer|exists:genera,id',
            'name' => 'required|unique:species'
        ]);

        $species = Species::create($data);

        return new SpeciesResource($species);
    }

    public function destroy(Species $species)
    {
        $species->delete();

        return response(null, 204);
    }
}
