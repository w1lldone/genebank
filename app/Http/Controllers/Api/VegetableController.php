<?php

namespace App\Http\Controllers\Api;

use App\Events\NewPhotoUploaded;
use App\Http\Controllers\Controller;
use App\Http\Resources\VegetablesResource;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function filter($model, $request)
    {
        if ($request->filled('load')) {
            $model = $model->with($request->load);
        }

        if ($request->filled('genus_id')) {
            $model = $model->whereHas('species', function ($query) use ($request)
            {
                $query->where('genus_id', $request->genus_id);
            });
        }

        if ($request->filled('species_id')) {
            $model = $model->where('species_id', "$request->species_id");
        }

        if ($request->filled('plant_introduction_number')) {
            $model = $model->where('plant_introduction_number', 'like', "%$request->plant_introduction_number%");
        }

        if ($request->filled('temporary_number')) {
            $model = $model->where('temporary_number', 'like', "%$request->temporary_number%");
        }

        if ($request->filled('donor_number')) {
            $model = $model->whereHas('passport', function ($query) use ($request)
            {
                $query->where('donor_number', 'like', "%$request->donor_number%");
            });
        }

        if ($request->filled('cultivar_name')) {
            $model = $model->where('cultivar_name', 'like', "%$request->cultivar_name%");
        }

        if ($request->filled('country')) {
            $model = $model->whereHas('passport', function ($query) use ($request)
            {
                $query->where('country', 'like', "%$request->country%");
            });
        }

        if ($request->filled('distrbution_status')) {
            $model = $model->whereHas('passport', function ($query) use ($request)
            {
                $query->where('distrbution_status', 'like', "%$request->distrbution_status%");
            });
        }

        return $model;
    }

    public function index(Request $request, Vegetable $vegetable)
    {
        $vegetable = $this->filter($vegetable, $request);

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
            'temporary_number' => 'nullable|unique:vegetables',
            'subtaxa' => 'nullable|string',
        ]);

        $vegetable = Vegetable::create($data);

        return new VegetablesResource($vegetable);
    }

    public function update(Vegetable $vegetable, Request $request)
    {
        $data = $request->validate([
            'cultivar_name' => 'nullable|string',
            'species_id' => 'exists:species,id',
            'temporary_number' => 'nullable|string',
            'subtaxa' => 'nullable|string'
        ]);

        $vegetable->update($data);

        return new VegetablesResource($vegetable);
    }

    public function destroy(Vegetable $vegetable)
    {
        $vegetable->delete();

        return response(null, 204);
    }
}
