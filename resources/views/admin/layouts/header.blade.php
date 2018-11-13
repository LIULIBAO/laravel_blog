<nav class="main-header navbar navbar-expand bg-dark navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <!-- search form -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="nav-link" data-toggle="dropdown">
                <img src="{{asset('adminlet/dist/img/user8-128x128.jpg')}}" class="user-image img-size-33 img-circle elevation-2" alt="User Image">
                <span class="hidden-xs btn-flat">admin</span>
                <i class="fa fa-sign-out" style="margin-left:2px;"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right bg-gray-light">
                        <span class="dropdown-item dropdown-header"  style="margin-top:25px;" >
                            <img src="{{asset('adminlet/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <p>Alexander Pierce</p>
                            <footer class="pull-right user-footer" style="padding:25px 15px 15px;">
                              <a href="/" class="btn btn-block btn-primary">
                                <i class="fa fa-sign-out"></i>退出
                              </a>
                            </footer>
                        </span>
            </div>
        </li>
    </ul>

</nav>
