<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/4
 * Time: 10:21
 */

namespace App\Models;

use App\Presenters\TestPresenter;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use TestPresenter;

    protected $table = 'article_types';

    protected $fillable = ['id', 'title'];
}