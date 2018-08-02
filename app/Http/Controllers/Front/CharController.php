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

    public function show(Request $request)
    {
        return view('char.show');
    }
    
    public function detail(Request $request)
    {
        return view('char.detail');
    }
}
