<?php

use Illuminate\Support\Facades\Route;

Route::get('xxx', 'Admin\NewsController@add');

Route::get('/', function () {
    return view('welcome');
    });
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'AAAController@bbb');
    Route::get('admin/profile/create', 'Admin\NewsController@add');
    Route::get('admin/news/edit', 'Admin\NewsController@edit');
    });