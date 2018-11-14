<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/2
 * Time: 16:29
 */
?>
@extends('admin.layouts.app')

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>
            </div>
            <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item">
                    <a  href="{{url('article/index')}}" class="nav-link btu btn-default" >
                        <i class="fa fa-reply"></i> 返回
                    </a>
                </li>
            </ul>

            <!-- /.card-header -->
            <div class="card-body col-md-10" style="width:70%;margin:0 auto">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" title="" placeholder="Enter ...">
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" title="" value="option1">
                            <label class="form-check-label">Checkbox</label>
                        </div>

                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" title="" value="option1">
                            <label class="form-check-label">Radio</label>
                        </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" title="">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>

                </form>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>
@endsection

@section('after_script')
<script type="text/javascript">

</script>
@endsection