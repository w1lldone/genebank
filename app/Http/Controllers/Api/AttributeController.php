<?php

namespace App\Http\Controllers\Api;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttributesResource;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(Request $request, Attribute $attribute)
    {
        if ($request->has('category_id')) {
            $attribute = $attribute->where('category_id', $request->category_id);
        }

        if ($request->has('name')) {
            $attribute = $attribute->where('name', 'like', "%$request->name%");
        }

        return AttributesResource::collection($attribute->get());
    }

    public function update(Attribute $attribute, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
            'unit' => 'nullable|string'
        ]);
    }
}
