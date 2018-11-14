<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/14
 * Time: 22:40
 */

namespace App\Repositories\Eloquent;


use App\Models\ArticleAssort;

class ArticleAssortRepositoryEloquent extends BaseRepository
{
    public function model()
    {
        return ArticleAssort::class;
    }

    /**
     * 多条插入
     * @param $data
     * @return mixed
     */
    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function findAll()
    {
        return $this->model->orderBy('id','desc')->get();
    }

}