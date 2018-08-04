<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VegetablesResource;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index(Request $request, Vegetable $vegetable)
    {
        if ($request->has('load')) {
            $vegetable = $vegetable->with($request->load);
        }

        if ($request->has('genus_id')) {
            $vegetable = $vegetable->whereHas('species', function ($query) use ($request)
            {
                $query->where('genus_id', $request->genus_id);
            });
        }

        $vegetables = $vegetable->get();

        return VegetablesResource::collection($vegetables);
    }

    public function show(Vegetable $vegetable, Request $request)
    {
        return new VegetablesResource($vegetable->load('characters', 'passport', 'evaluations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'species_id' => 'required|exists:species,id',
            'cultivar_name' => 'nullable|string',
            'temporary_number' => 'nullable|string|unique:vegetables',
        ]);

        $vegetable = Vegetable::create($data);

        return new VegetablesResource($vegetable);
    }

    public function update(Vegetable $vegetable, Request $request)
    {
        $data = $request->validate([
            'cultivar_name' => 'nullable|string',
        ]);

        $vegetable->update($data);

        return new VegetablesResource($vegetable);
    }
}
