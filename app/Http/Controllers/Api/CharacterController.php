<?php

namespace App\Http\Controllers\Api;

use App\Character;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request, Character $character)
    {
        if ($request->has('category_id')) {
            $character = $character->where('category_id', $request->category_id);
        }

        if ($request->has('name')) {
            $character = $character->where('name', 'like', "%$request->name%");
        }

        return $character->get(['id', 'name']);
    }

    public function update(Character $character, Request $request)
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
