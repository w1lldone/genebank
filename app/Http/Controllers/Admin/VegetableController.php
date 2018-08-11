<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VegetableController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.vegetable.index');
    }

    public function show($vegetable)
    {
        return view('admin.vegetable.show', compact('vegetable'));
    }
}
