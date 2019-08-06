<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center" style="color: grey">MAIN NAVIGATION</li>
            {{--<li><a href="{{route('dashboard')}}"><i class="fa fa-database"></i> <span>Dashboard</span></a></li>--}}
            <li><a href="{{route('invoices')}}"><i class="fa fa-list"></i> <span>Invoice</span></a></li>
            <li><a href="{{route('orders')}}"><i class="fa fa-list"></i> <span>Order</span></a></li>
            <li><a href="{{route('getNotification')}}"><i class="fa fa-info-circle"></i> <span>Notification</span></a></li>
            <li><a  href="{{route('ranks')}}"><i class="fa fa-random"></i> <span>Customer Ranking</span></a></li>
            {{--<li><a href="{{route('ranks')}}"><i class="fa fa-random"></i> <span>Sale Ranking</span></a></li>--}}
            <li><a href="{{route('reports')}}"><i class="fa fa-plus-circle"></i> <span>Report</span></a></li>


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

