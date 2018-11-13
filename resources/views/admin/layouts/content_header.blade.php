<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/3
 * Time: 15:33
*/?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="m-0 text-dark">@isset($page_title) {{$page_title}} @endisset</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">首页</a></li>
                    <li class="breadcrumb-item active">当前页</li>
                </ol>
            </div>
        </div>
    </div>
</div>