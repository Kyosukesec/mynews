<?php

use Illuminate\Support\Facades\Route;

Route::get('xxx', 'Admin\NewsController@add');

Route::get('/', function () {
    return view('welcome');
    });
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'AAAController@bbb');
    Route::get('profile/create', 'Admin\NewsController@add');
    Route::get('news/edit', 'Admin\NewsController@edit');
    });