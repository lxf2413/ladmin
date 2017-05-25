<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/25
 * Time: 18:35
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('admin/index');
    }
}