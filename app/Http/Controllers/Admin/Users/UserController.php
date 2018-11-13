<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/5
 * Time: 9:54
 */

namespace App\Http\Controllers\Admin\Isers;


use App\Http\Controllers\Admin\BaseController;

class UserController extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        $page_title = '首页';
        return view('admin.index.index', compact('page_title'));
    }

    public function  add()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}