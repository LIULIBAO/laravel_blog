<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/14
 * Time: 22:33
 */

namespace App\Http\Controllers\Admin\Articles;


use App\Http\Controllers\Admin\BaseController;
use App\Repositories\Eloquent\ArticleAssortRepositoryEloquent;
use League\Flysystem\Exception;

class AssortController extends BaseController
{
    protected $repository;

    public function __construct(ArticleAssortRepositoryEloquent $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }


    public function index()
    {
        $page_title = '文章分类';
//        $data = $this->repository->findAll();
//        dd($data);

        return view('admin.article.assort', compact('page_title'));
    }

}