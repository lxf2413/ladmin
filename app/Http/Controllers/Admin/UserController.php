<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26
 * Time: 13:55
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function login(Request $request){
        if($request->isMethod('GET')){
            return view('admin.user.login');
        }else{
            $data = $request->input();
//            $info = DB::select('select * from admin where uname = ? and password = ?',[$data['uname'],$data['password']]);
            $info = DB::table('admin')->select('id','nickname')->where(['uname'=>$data['uname'],'password'=>$data['password']])->first();
            if(!$info){
               return [
                   'status' => false,
                   'message' => '登录信息有误！'
               ];
            }else{
                Cookie::queue('admininfo','111','300');
                return [
                    'status' => true,
                    'message' => '登录成功！'
                ];
            }
        }
    }

}