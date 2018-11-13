<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/4
 * Time: 10:28
 */

namespace App\Http\Controllers\Admin\Dashboards;


use App\Presenters\TestPresenter;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Admin\BaseController;
use App\Repositories\Contracts\TestRepository;

class TestController extends BaseController
{
    protected $repository;

    public function __construct(TestRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function index()
    {
        dd(date('Y-m-d H:i'));
        $data = $this->repository->updates();
        dd($data);
        $page_title = '测试';
        return view('admin.dashboard.test', compact('page_title'));
    }
}