<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CharactersResource;
use App\Vegetable;
use Illuminate\Http\Request;

class VegetableCharactersController extends Controller
{
    public function show(Vegetable $vegetable, Request $request)
    {
        return CharactersResource::collection($vegetable->characters);
    }

    public function update(Vegetable $vegetable, Request $request)
    {
        $data = $request->validate([
            '*.id' => 'required|exists:characters',
            '*.value' => 'nullable',
        ]);

        foreach ($data as $item) {
            $vegetable->characters()->updateExistingPivot($item['id'], [
                'value' => $item['value'],
            ]);
        }

        $updatedId = collect($data)->pluck('id');

        return CharactersResource::collection($vegetable->characters()->whereIn('character_id', $updatedId)->get());
    }
}
