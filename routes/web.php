<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $component = 'home-base';
    return view('index', compact('component'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{component}', function ($component)
{
    return view('index');
});
