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

Route::get('user/reset','Home\UserController@reset');

Route::any('user/login',['as'=>'login','uses'=>'Home\UserController@login']);//登录
Route::any('user/register',['as'=>'register','uses'=>'Home\UserController@register']);//注册





//后台入口
Route::group(['middleware'=>'checklogin'],function(){
    Route::get('admin', ['uses'=>'Admin\IndexController@index']);
});
//后台用户登录
Route::any('admin/login',['uses'=>'Admin\UserController@login']);
//App::abort(502);
//demo演示
Route::get('demo',['uses'=>'Admin\IndexController@demo']);


