<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
    public function index(Request $request)
    {
        return view('evaluation.index');
    }
    
    public function show(Request $request)
    {
        return view('evaluation.show');
    }
}
