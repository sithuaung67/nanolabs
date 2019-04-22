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

Route::get('/songs',[
    'uses'=>'ApiController@getSongs'
]);
Route::get('/signers',[
   'uses'=>'ApiController@getSingers'
]);
Route::get('/albums',[
   'uses'=>'ApiController@getAlbums'
]);
Route::get('/category',[
   'uses'=>'ApiController@getCategory'
]);
Route::get('search/{q}',[
    'uses'=>'ApiController@getSearch'
]);