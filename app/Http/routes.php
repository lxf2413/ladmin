<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台入口
Route::get('/', ['uses'=>'Index\IndexController@index']);
//后台入口
Route::get('admin', ['uses'=>'Admin\IndexController@index']);

