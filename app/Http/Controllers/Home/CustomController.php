<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13
 * Time: 14:14
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class CustomController extends Controller{
      public function index(){
          return view('home.custom');
      }
}