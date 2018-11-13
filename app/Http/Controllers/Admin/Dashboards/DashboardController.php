<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/3
 * Time: 22:53
 */

namespace App\Http\Controllers\Admin\Dashboards;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function icon()
    {
        $page_title = '模板页';
        return view('admin.dashboard.icons', compact('page_title'));
    }
}