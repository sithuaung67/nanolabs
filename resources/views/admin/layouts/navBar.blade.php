<header class="main-header">

    <!-- Logo -->
    <a href="{{route('users')}}" class="logo" style="background: #1e282c">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="../../ntg/myint1.jpg" class="img-circle" style="width: 40px"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="../../ntg/myint.png" class="img-circle" style="width: 55% ;height: auto"></span>
    </a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background: white">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" style="color: black" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" style="color: black" data-toggle="dropdown">
                        <span class="fa fa-user-circle"></span>
                        <span class="hidden-xs">{{Auth::user()->full_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <span class="fa fa-user-circle fa-5x" style="color: #ffffff;"></span>
                            <p>
                                {{Auth::user()->full_name}}
                                <small>Member since {{date('d-M-Y', strtotime(Auth::User()->created_at))}}</small>
                                <small>

                                </small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">

                                <a href="{{route('account.setting')}}" style="color: black" ><i class="fa fa-cog"></i> Setting</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('logout')}}"
                                    class="btn btn-default btn-flat">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>


                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>