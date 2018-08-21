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
    public function berita1(Request $request)
    {
        return view('news.berita1');
    }
    public function berita2(Request $request)
    {
        return view('news.berita2');
    }
    public function berita3(Request $request)
    {
        return view('news.berita3');
    }
    
    public function show(Request $request, $id)
    {
        return view('news.show', compact('id'));
    }
}
