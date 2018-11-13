<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/5
 * Time: 9:38
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        //设置项目时间同步
        date_default_timezone_set("PRC");
    }

    //welcome首页
    public function home()
    {
        $page_title = '首页';
        return view('admin.welcome', compact('page_title'));
    }
}