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
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller{
    public function login(Request $request){
        if($request->isMethod('get')){
            return view('home.user.login');
        }else{
            $this->validate($request,[
                'uname' => 'required',
                'password' => 'required'
            ],[
                'uname' => '账号',
                'password' => '密码'
            ],[
                'required' => '请填写:attribute!'
            ]);
            $data = $request->input();
            $userinfo = DB::table('user')->select('id','uname')->where(['uname'=>$data['uname'],'password'=>$data['password']])->first();
            if(!$userinfo){
                return Redirect::back()->withErrors(['message'=>'登录信息有误！']);
            }else{
                return Redirect::to('/');
            }
        }
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
            $data = $request->input();
            if($data['password'] != $data['again_password']){
               return Redirect::back()->withInput()->withErrors(['message'=>'两次密码不相同！']);
            }
            $res = DB::table('user')->where(['uname'=>$data['uname']])->count();
            if($res){
                return Redirect::back()->withInput()->withErrors(['message'=>'该账号已存在！']);
            }
            $res = DB::table('user')->insert([
                'uname' => $data['uname'],
                'password' => $data['password']
            ]);
            if($res){
                return Redirect::route('login');
            }
            return Redirect::back()->withErrors(['message'=>'注册失败！注意数据格式']);
        }
    }
}