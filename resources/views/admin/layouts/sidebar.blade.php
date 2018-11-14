<style>
    .main-navigation{width: 100%;height:25px;color: #c2c7d0;line-height: 25px;margin-left:5px;}
    /*@media (min-width:80px){.main-navigation{display: none}}*/
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="max-width: 240px;">
    <!-- Brand Logo -->
    <a href="javascript:void(0);" class="brand-link">
        <span style="display: block;text-align:center;">
          Lovya<span class="brand-text font-weight-light">后台管理</span>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="line-height:0;font-size:0.9rem;height:100%;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2">
            <div class="pull-left image">
                <img src="{{asset('adminlet/dist/img/user8-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="pull-left info" style="font-size: 1rem;">
                <p>admin</p>
                <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>

        <div class="mt-1 main-navigation" >主导航</div>

        <!-- Sidebar Menu -->
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{url('home')}}" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>首页</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            用户管理
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:void (0)" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>管理员列表</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-key"></i>
                        <p>
                            权限管理
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:void (0)" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>角色管理</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void (0)" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>目录管理</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            文章管理
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('article/index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>文章列表</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('assort/index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>文章类型</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void (0)" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>随心记录</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-send"></i>
                        <p>
                            广告管理
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:void (0)" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>幻灯片管理</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-cogs"></i>
                        <p>
                            系统样式管理
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard/icon')}}" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>系统Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('test')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>测试</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
