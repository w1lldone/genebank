<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'genera'], function(){
    Route::get('/', 'GenusController@index');
});

Route::group(['prefix' => 'species'], function(){
    Route::get('/', 'SpeciesController@index');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/', 'SpeciesController@store');
    });
});

Route::group(['prefix' => 'vegetables'], function(){
    Route::get('/', 'VegetableController@index');
    Route::get('/{vegetable}', 'VegetableController@show');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/', 'VegetableController@store')->name('route.name');
    });
});

Route::group(['prefix' => 'characters'], function(){
    Route::get('/', 'CharacterController@index');
});
