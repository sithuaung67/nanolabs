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



Route::get('/login',[
    'uses'=>'AuthController@getLogin',
    'as'=>'login'
]);

Route::post('/login',[
    'uses'=>'AuthController@postLogin',
    'as'=>'login'
]);


Route::group(['middleware'=>'auth'], function (){

    Route::get('/', function (){
        return redirect()->route('dashboard');
    });


    Route::group(['prefix'=>'user'], function (){

        Route::get('/account/setting',[
            'uses'=>'AdminController@getUserAccountSetting',
            'as'=>'account.setting'
        ]);
        Route::post('/password/update',[
            'uses'=>'AdminController@postUpdatePassword',
            'as'=>'password.update'
        ]);
        Route::get('/dashboard',[
            'uses'=>'AdminController@getDashboard',
            'as'=>'dashboard'
        ]);

        Route::get('/logout',[
            'uses'=>'AuthController@getLogout',
            'as'=>'logout'
        ]);
        Route::get('/error',[
            'uses'=>'AdminController@getError',
            'as'=>'error'
        ]);
    });




    Route::group(['prefix'=>'admin', ], function (){

        Route::get('/users',[
            'uses'=>'AdminController@getUsers',
            'as'=>'users'
        ]);
        Route::get('/user/new',[
            'uses'=>'AdminController@getNewUser',
            'as'=>'user.new'
        ]);
        Route::post('/user/new',[
            'uses'=>'AdminController@postNewUser',
            'as'=>'user.new'
        ]);
        Route::post('/user/delete',[
            'uses'=>'AdminController@postDeleteUser',
            'as'=>'user.delete'
        ]);

        Route::post('/user/update',[
            'uses'=>'AdminController@postUpdateUser',
            'as'=>'user.update'
        ]);
        Route::get('category',[
           'uses'=>'SingerController@getCategory',
           'as'=>'category'
        ]);
        Route::post('postCategory',[
           'uses'=>'SingerController@postCategory',
           'as'=>'postCategory'
        ]);
        Route::get('singer',[
           'uses'=>'SingerController@getSinger',
           'as'=>'singer'
        ]);
        Route::post('postSinger',[
           'uses'=>'SingerController@postSinger',
           'as'=>'postSinger'
        ]);
        Route::get('album',[
           'uses'=>'SingerController@getAlbum',
           'as'=>'album'
        ]);
        Route::post('postAlbum',[
           'uses'=>'SingerController@postAlbum',
           'as'=>'postAlbum'
        ]);
        Route::get('song',[
           'uses'=>'SingerController@getSong',
           'as'=>'song'
        ]);
        Route::post('postSong',[
           'uses'=>'SingerController@postSong',
           'as'=>'postSong'
        ]);
        Route::post('updateCategory/{id}',[
            'uses'=>'SingerController@updateCategory',
            'as'=>'updateCategory'
        ]);
        Route::post('updateSingers/{id}',[
            'uses'=>'SingerController@updateSinger',
            'as'=>'updateSinger'
        ]);
        Route::get('deleteSong/{id}',[
           'uses'=>'SingerController@deleteSong',
           'as'=>'deleteSong'
        ]);
        Route::post('updateSong/{id}',[
            'uses'=>'SingerController@updateSong',
            'as'=>'updateSong'
        ]);
        Route::post('updateAlbum/{id]',[
           'uses'=>'SingerController@updateAlbum',
           'as'=>'updateAlbum'
        ]);

    });



});



