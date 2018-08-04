<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharController extends Controller
{
    public function index(Request $request)
    {
        return view('char.index');
    }

    public function show(Request $request, $genus)
    {
        return view('char.show', compact('genus'));

    }
    
    public function detail(Request $request)
    {
        return view('char.detail', compact('genus'));
    }
}
