<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26
 * Time: 13:55
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class UserController extends Controller{
    public function login(){
        return view('admin.user.login');
    }

}