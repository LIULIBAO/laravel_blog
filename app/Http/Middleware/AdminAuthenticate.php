<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/2
 * Time: 17:43
 */

namespace App\Http\Middleware;


use Closure;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if (Auth::guard('admin')->guest()){
//            if ($request->ajax() || $request->wantsJson()){
//                return ApiMessage::error("请先登录",403);
//            }else{
//                return redirect('/admin/login');
//            }
//        }
        return $next($request);
    }
}