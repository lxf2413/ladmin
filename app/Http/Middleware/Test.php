<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26
 * Time: 14:06
 */

namespace App\Http\Middleware;
use Closure;

class Test{
  public function handle($request,Closure $next){
      if ($request->input('age') <= 200) {
          return redirect('login');
      }
      return $next($request);
  }
}