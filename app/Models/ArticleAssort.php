<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/14
 * Time: 22:38
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleAssort extends Model
{
    protected $table = 'article_assorts';

    protected $fillable = ['title','sort'];
}