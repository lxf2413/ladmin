<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/4
 * Time: 20:18
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function login(){
        return view('home.user.login');
    }
    public function register(Request $request){
        if($request->isMethod('get')){
            return view('home.user.register');
        }else{
            $this->validate($request,
                [
                    'uname' => 'required|min:2|max:20',
                    'password' => 'required|integer',
                    'again_password' => 'required|integer'
                ],[
                    'required'=>'请填写:attribute！',
                    'min'=> ':attribute长度不符合！',
                    'max'=> ':attribute长度不符合！',
                    'integer'=> ':attribute必须为整型！',

                ],[
                    'uname' => '姓名',
                    'password' => '密码',
                    'again_password' => '确认密码'
                ]);
//            $validator = \Validator::make($request->input(),[
//                'uname' => 'required|min:2|max:20',
//                'password' => 'required|integer',
//                'again_password' => 'required|integer'
//            ],[
//                'required'=>'请填写:attribute！',
//                'min'=> ':attribute长度不符合！',
//                'max'=> ':attribute长度不符合！',
//                'integer'=> ':attribute必须为整型！',
//
//            ],[
//                'uname' => '姓名',
//                'password' => '密码',
//                'again_password' => '确认密码'
//            ]);
//            if($validator->fails()){
//                redirect()->back()->withErrors($validator);
//            }
            echo 1;
//            DB::table('user')->where(['uname'=>])
        }
    }
}