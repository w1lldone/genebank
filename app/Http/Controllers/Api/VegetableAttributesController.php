<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttributesResource;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableAttributesController extends Controller
{
    public function show(Vegetable $vegetable, Request $request)
    {
        return AttributesResource::collection($vegetable->attributes);
    }

    public function update(Vegetable $vegetable, Request $request)
    {
        $data = $request->validate([
            '*.id' => 'required|exists:attributes',
            '*.value' => 'nullable',
        ]);

        foreach ($data as $item) {
            $vegetable->attributes()->updateExistingPivot($item['id'], [
                'value' => $item['value'],
            ]);
        }

        $updatedId = collect($data)->pluck('id');

        return AttributesResource::collection($vegetable->attributes()->whereIn('attribute_id', $updatedId)->get());
    }
}
