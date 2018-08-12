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
    Route::get('/{genus}', 'GenusController@show');
});

Route::group(['prefix' => 'species'], function(){
    Route::get('/', 'SpeciesController@index');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/', 'SpeciesController@store');
        Route::delete('/{species}', 'SpeciesController@destroy');
    });
});

Route::group(['prefix' => 'vegetables'], function(){
    Route::get('/', 'VegetableController@index');
    Route::get('/{vegetable}', 'VegetableController@show');
    Route::get('/{vegetable}/attributes', 'VegetableAttributesController@show');
    Route::get('/{vegetable}/passport', 'PassportController@show');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/', 'VegetableController@store');
        Route::put('/{vegetable}', 'VegetableController@update');
        Route::put('/{vegetable}/attributes', 'VegetableAttributesController@update');
        Route::put('/{vegetable}/passport', 'PassportController@update');
        Route::post('/{vegetable}/photo', 'VegetableController@storePhoto');
        Route::delete('/{vegetable}', 'VegetableController@destroy');
    });
});

Route::group(['prefix' => 'attributes'], function(){
    Route::get('/', 'AttributeController@index');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::put('/{attribute}', 'AttributeController@update');
    });
});
