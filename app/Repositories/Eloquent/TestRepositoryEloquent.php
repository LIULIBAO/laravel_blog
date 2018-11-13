<?php

namespace App\Repositories\Eloquent;

use App\Models\Test;
use App\Repositories\Contracts\TestRepository;

/**
 * Class TestRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class TestRepositoryEloquent extends BaseRepository implements TestRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {

        return Test::class;
    }


    public function findAll()
    {
        return $this->model->paginate()->toArray();
    }

    public function updates()
    {
        $data = array(
            'title' => 'ceshi34456',
            'sort' => 2
        );

        return $this->model->where('id', 1)->update($data);
    }


}
