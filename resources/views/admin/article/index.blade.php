<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/2
 * Time: 16:29
 */
?>
@extends('admin.layouts.app')

@section('after_link')
    <link rel="stylesheet" href="{{asset('adminlet/plugins/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>
            </div>
            <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('article/edit')}}">
                        <i class="fa fa-plus"></i> 添加文章
                    </a>
                </li>
            </ul>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered  table-hover table-striped">
                    <tbody><tr>
                        <th style="width: 10px">id</th>
                        <th>文章标题</th>
                        <th>创建时间</th>
                        <th style="width: auto">状态</th>
                        <th style="width: auto">操作</th>
                    </tr>

                    @foreach($list as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td>{{ $val->created_at }}</td>
                        <td><span class="badge bg-danger">{{$val->status}}</span></td>
                        <td>修改</td>
                    </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {!! $list->links() !!}
            </div>

        </div>
    </div>
</div>
@endsection

@section('after_script')
<script type="text/javascript">

</script>
@endsection