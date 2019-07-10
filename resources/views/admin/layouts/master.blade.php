<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMT | @yield('title')</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <!-- Data table-->
    <link rel="stylesheet" href="{{asset('datatable/app.css')}}">

    <!-- Google Font -->


    @yield('style')

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        @include('admin.layouts.navBar')
        @include('admin.layouts.sideBar')
        @yield('content')
    </div>

    <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

     <script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>

      <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('datatable/app.js')}}"></script>

    <script src="{{asset('js/action.js')}}"></script>
    <script src="{{asset('jquery.tableTotal.js')}}"></script>


    <script>
        $(function () {
            $(".tem").fadeOut(5000);

           $("#dataTable").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTable1").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#user_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#customer_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#sale_table").dataTable({
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });

        });

    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable1').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }

        }
        document.getElementById('dataTable1').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td id="point"><b>' + sum1 + '<b></td> <td></td> <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
        document.getElementById('dataTable1').innerHTML += '<tr> <td><b></b></td><td></td><td></td><td></td> <td id="point"><b>Total:' + sum1 + '<b></td> <td></td> <td><b>Total:' + sum2+ '</b></td><td></td><td></td><td></td><td><b>Total:' + sum3+ '</b></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>

    @yield('script')

</body>
</html>