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
}
