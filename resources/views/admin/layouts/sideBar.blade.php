<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center" style="color: grey">MAIN NAVIGATION</li>
            {{--<div class="user-panel">--}}
                {{--<div class="pull-left image">--}}
                    {{--<span class="fa fa-user-circle fa-2x" style="color: #ffffff;"></span>--}}
                {{--</div>--}}
                {{--<div class="pull-left info">--}}
                    {{--<p>{{Auth::user()->full_name}}</p>--}}
                    {{--<i class="fa fa-circle text-success"></i> Online--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<form action="#" method="get" class="sidebar-form">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                    {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat">--}}
                  {{--<i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
                {{--</div>--}}
            {{--</form>--}}

            <li><a href="{{route('users')}}"><i class="fa fa-database"></i> <span>Dashboard</span></a></li>
            <li><a href="{{route('invoices')}}"><i class="fa fa-list"></i> <span>Invoice</span></a></li>
            <li><a href="{{route('orders')}}"><i class="fa fa-list"></i> <span>Order</span></a></li>
            <li><a href="{{route('getNotification')}}"><i class="fa fa-info-circle"></i> <span>Notification</span></a></li>
            <li><a href="{{route('ranks')}}"><i class="fa fa-random"></i> <span>Customer Ranking</span></a></li>
            <li><a href="{{route('ranks')}}"><i class="fa fa-random"></i> <span>Sale Ranking</span></a></li>
            <li><a href="{{route('users')}}"><i class="fa fa-plus-circle"></i> <span>Report</span></a></li>


        @if(Auth::User()->hasRole('Administrator'))
            <li><a href="{{route('users')}}"><i class="fa fa-users"></i> <span>Admin Users</span></a></li>
            @endif
            <li><a href="{{route('customers')}}"><i class="fa fa-users"></i> <span>Customer Users</span></a></li>
            <li><a href="{{route('sales')}}"><i class="fa fa-users"></i> <span>Sale Users</span></a></li>


            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

