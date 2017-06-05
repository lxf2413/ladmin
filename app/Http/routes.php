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
Route::get('/', 'Home\IndexController@index');
Route::get('message','Home\MessageController@index');
Route::get('user/login','Home\UserController@login');
Route::get('user/reset','Home\UserController@reset');
Route::get('user/regiter','Home\UserController@regiter');



//后台入口
Route::group(['middleware'=>'checklogin'],function(){
    Route::get('admin', ['uses'=>'Admin\IndexController@index']);
});
//后台用户登录
Route::any('admin/login',['uses'=>'Admin\UserController@login']);
//App::abort(502);
//demo演示
Route::get('demo',['uses'=>'Admin\IndexController@demo']);


