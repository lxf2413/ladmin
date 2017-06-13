<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13
 * Time: 12:53
 */

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Cookie;
use Closure;

class CheckCookie{
    public function handle($request,Closure $next){
        if(Cookie::has('user')){
            return redirect('/');
        }
        return $next($request);
    }

}