<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        return view('news.index');
    }
    
    public function show(Request $request, $id)
    {
        return view('news.show', compact('id'));
    }
}
