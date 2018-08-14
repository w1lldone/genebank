<?php

Route::get('/', function ()
{
    return redirect()->route('admin.dashboard.index');
})->name('admin.index');

Route::get('/dashboard', function ()
{
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::group(['prefix' => 'vegetable'], function(){
    Route::get('/', 'VegetableController@index')->name('admin.vegetable.index');
    Route::get('/{vegetable}', 'VegetableController@show')->name('admin.vegetable.show');
});
