<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4
 * Time: 20:18
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class UserController extends Controller{
    public function login(){
        return view('home.user.login');
    }
    public function register(){
        return view('home.user.register');
    }
}