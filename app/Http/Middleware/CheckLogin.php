<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26
 * Time: 14:06
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Session;

class CheckLogin{
  public function handle($request,Closure $next){
      if(!Session::has('admininfo')){
          return redirect('user/login');
      }
      return $next($request);
  }
}