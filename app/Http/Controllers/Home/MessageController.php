<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/3
 * Time: 22:40
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Request;

class MessageController extends Controller{
    public function index(){
        return view('home.message');
    }
}