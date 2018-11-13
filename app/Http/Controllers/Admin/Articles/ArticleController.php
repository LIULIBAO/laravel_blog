<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/12
 * Time: 9:28
 */

namespace App\Http\Controllers\Admin\Articles;


use App\Http\Controllers\Admin\BaseController;
use App\Repositories\Eloquent\ArticleRepositoryEloquent;
use Illuminate\Support\Facades\DB;

class ArticleController extends BaseController
{
    protected  $repositoryEloquent;

    public function __construct(ArticleRepositoryEloquent $repositoryEloquent)
    {
        parent::__construct();
        $this->repositoryEloquent = $repositoryEloquent;
    }

    //文章编辑首页
    public function index()
    {
        $page_title = '文章列表';
        $list = $this->repositoryEloquent->findAll();
//        dd($list);
        return view('admin.article.index', compact('page_title', 'list'));
    }

    public function edit()
    {
        $page_title = '文章编辑';
        return view('admin.article.edit', compact('page_title'));
    }

    public function delete()
    {

    }


    //文章分类
    public function types()
    {
        return view('admin.article.types');
    }
}