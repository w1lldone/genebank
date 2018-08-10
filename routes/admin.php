<?php

Route::get('/dashboard', function ()
{
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::group(['prefix' => 'vegetable'], function(){
    Route::get('/', 'VegetableController@index')->name('admin.vegetable.index');
    Route::get('/{vegetable}', 'VegetableController@show')->name('admin.vegetable.show');
});
