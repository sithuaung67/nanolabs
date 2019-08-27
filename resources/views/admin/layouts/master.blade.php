<!doctype html>
<html lang="en">
<head>
    <style>
        #back{
            background: #1e282c;
            height: 40px;
            width: 150px;
            color: white;
            border-radius: 30px;
            font-size: 15px;
            border: none;
            box-shadow: 0 7px #999;
            outline: none;
            cursor: pointer;
            text-align: center;
        }
        #back:hover {background-color: #312e25}

        #button {
            padding: 10px 25px;
            font-size: 13px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 20px;
            box-shadow: 0 7px #999;
        }

        #button:hover {background-color: #312e25}

        #button:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #changePass:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #buttonPrint {
                    padding: 10px 25px;
                    font-size: 15px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 20px;
                    box-shadow: 0 7px #999;
                }

        #buttonPrint:hover {background-color: #312e25}

        #buttonPrint:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #gobutton {
                    padding: 10px 20px;
                    font-size: 15px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #gobutton:hover {background-color: #312e25}

        #gobutton:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #print {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #print:hover {background-color: #312e25}

        #print:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #back_invoices_price {
            padding: 10px 20px;
            font-size: 15px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 30px;
            box-shadow: 0 7px #999;
        }
        #back_invoices_price:hover {background-color: #312e25}

        #back_invoices_price:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #back_invoices_price {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #CustomerQrcode:hover {background-color: #312e25}

        #CustomerQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #SaleQrcode {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #SaleQrcode:hover {background-color: #312e25}

        #SaleQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #RankButton {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 7px #999;
                }
        #RankButton:hover {background-color: #312e25}

        #RankButton:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
        #SearchButton {
            padding: 9px 45px;
            font-size: 13px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #1e282c;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px #999;
        }
        #SearchButton:hover {background-color: #312e25}

        #SearchButton:active {
            background-color: #1e282c;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #CustomerQrcode {
                    padding: 10px 25px;
                    font-size: 13px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    color: #fff;
                    background-color: #1e282c;
                    border: none;
                    border-radius: 30px;
                    box-shadow: 0 4px #999;
                }
        #CustomerQrcode:hover {background-color: #312e25}

        #CustomerQrcode:active {
                    background-color: #1e282c;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }

    </style>
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

           $("#sum").dataTable({
               order:[[2,"desc"]],
               "bFilter" : false,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTableInvoice").dataTable({
               "bFilter" : true,
               "bPaginate": true,
               "bInfo": true
           });
           $("#dataTableInvoicePrint").dataTable({
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
    <script type="text/javascript">
        function printData()
        {
            var divToPrint=document.getElementById("dataTable4");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#button').on('click',function(){
            printData();
        });
        function printData3()
        {
            var divToPrint=document.getElementById("QrcodeCustomer");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#CustomerQrcode').on('click',function(){
            printData3();
        });
        function printData2()
        {
            var divToPrint=document.getElementById("QrcodeSale");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#SaleQrcode').on('click',function(){
            printData2();
        });
        function printData6()
        {
            var divToPrint=document.getElementById("PrintHello");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#reportPrint').on('click',function(){
            printData6();
        });
        function printData1()
        {
            var divToPrint=document.getElementById("dataTableInvoicePrint");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#buttonPrint').on('click',function(){
            printData1();
        });
        function printRank()
        {
            var divToPrint=document.getElementById("RankTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#RankButton').on('click',function(){
            printRank();
        });
        function Qrcode()
        {
            var divToPrint=document.getElementById("RankTable");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            // newWin.close();
        }

        $('#Qrcode').on('click',function(){
            printRank();
        });
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable1').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
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
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTable1').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable2').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
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
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTable2').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTable').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal= 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point_eight') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        //document.getElementById('dataTable').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td></td><td></td><td></td><td><b>' + sum3+ '</b></td> </tr> ';
        document.getElementById('dataTable').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td><td><b>' + sum1 + '<b></td>  <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td><td></td><td></td><td></td> </tr> ';

        document.getElementById('TotalPointEight').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script language="javascript" type="text/javascript">
        var tds = document.getElementById('dataTableInvoice').getElementsByTagName('td');
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var kyat = 0;
        var pal = 0;
        var yae = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'point_eight') {
                sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'quantity') {
                sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'gram') {
                sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'kyat') {
                $kyat =kyat +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'pal') {
                $pal=pal +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
            if(tds[i].className == 'yae') {
                $yae=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // if($yae < 8){
                //     $yae1=yae +=isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                // }
                // if($yae > 8){
                //     // $yaemins=$yae/8;
                //     // $yaemin=$yae%8;
                //     // $yae1=$yaemin;
                //     // $pal+=$yaemins;
                //     $yae1="kdfdd";
                // }
            }

        }
        document.getElementById('dataTableInvoice').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td><td><b>' + sum2 + '<b></td><td><b>' + sum3 + '<b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><b>' + $kyat + '<b></td> <td><b>' + $pal+ '</b></td><td><b>' + $yae+ '</b></td> </tr> ';
        document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
        // document.getElementById('dataTableInvoice').innerHTML += '<tr> <td><b>Total</b></td><td></td><td></td><td></td> <td><b>' + sum1 + '<b></td> <td><b>' + sum2+ '</b></td><td><b>' + sum3+ '</b></td> </tr> ';
        // document.getElementById('TotalPoint').innerHTML += '<tr><td><b>Total Point Eight</b><br><b>' + sum2 + '<b> </td> </tr>';
        // document.getElementById('TotalQuantity').innerHTML += '<tr><td><b>Total Quantity</b><br><b>' + sum1 + '<b> </td> </tr>';
        // document.getElementById('TotalGram').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
       // document.getElementById('TotalGam').innerHTML += '<tr><td><b>Total Gram</b><br><b>' + sum3 + '<b> </td> </tr>';
    </script>
    <script>
        $('.form-group').on('input','.prc',function () {
            var totalSum=1;
            $('.form-group .prc').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum *=parseFloat(inputVal);
                }
            });
            $('#point').val(totalSum);
        });

        $('.form-group').on('input','.pc0',function () {
            var totalSum=0;
            $('.form-group .pc0').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum +=parseFloat(inputVal);
                }
            });
            $('#text4').val(totalSum);
        });
        $('.form-group').on('input','.return_quantity',function () {
            $normal=$('#normal').val();
            $('.form-group .return_quantity').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    $now_remain_normal=parseInt($normal-inputVal);
                    $('#now_remain_quantity').val($now_remain_normal);

                }
            });
        });
        $('.form-group').on('input','.return_pointeight',function () {
            $pointEight=$('#point_eight').val();
            $('.form-group .return_pointeight').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    $now_remain_pointeight=parseInt($pointEight-inputVal);
                    $('#now_remain_pointeight').val($now_remain_pointeight);

                }
            });
        });
        $('.form-group').on('input','.return_gram',function () {
            $gram=$('#gram').val();
            $now_remain_gram=$('#now_remain_gram').val();
            $('.form-group .return_gram').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    $now_remain_gram=parseFloat($gram-inputVal).toFixed(2);
                    $now_remain_gram=parseFloat($now_remain_gram).toFixed(2);
                    $('#now_remain_gram').val($now_remain_gram);
                }
            });
        });

            $('.form-group').on('input','.pc1',function () {
            $kyat=0;
            $pal=0;
            $yae=0;
            $inputVal=0;
            $number=16.6;
            $('.form-group .pc1').each(function () {

                $inputVal=$(this).val();
                if($.isNumeric($inputVal)){
                    $kyat =parseInt($inputVal/$number);
                    $pal =parseFloat((($inputVal/$number)-$kyat)*16);
                    $pal1=parseInt($pal);
                    $yae=$pal-$pal1;
                    $yae1=$yae*8;
                    $form=parseFloat($yae1).toFixed(2);
                    // $pal2 =parseInt((((($inputVal%$number)/$number)*16)/$number)*8);
                    //


                }
            });
            $('#kyat').val($kyat);
            $('#pal').val($pal1);
            $('#yae').val($form);
        });
        // $('.form-group').on('input','.now_remain_gram',function () {
        $("#now_remain_gram_btn").click(function(){
            $kyat=0;
            $pal=0;
            $yae=0;
            $inputVal=0;
            $number=16.6;
            $('.form-group .now_remain_gram').each(function () {
                $inputVal=$(this).val();
                if($.isNumeric($inputVal)){
                    $kyat =parseInt($inputVal/$number);
                    $pal =parseFloat((($inputVal/$number)-$kyat)*16);
                    $pal1=parseInt($pal);
                    $yae=$pal-$pal1;
                    $yae1=$yae*8;
                    $form=parseFloat($yae1).toFixed(2);
                    // $pal2 =parseInt((((($inputVal%$number)/$number)*16)/$number)*8);
                }
            });
            $('#sub_return_kyat').val($kyat);
            $('#sub_return_pal').val($pal1);
            $('#sub_return_yae').val($form);
        });


        // $(document).ready(function () {
        //         $('.form-group').on('input', '.previous_remain_kyat', function () {
        //             //var previous_remain_kyat=$kyat;
        //             var previous_remain_kyat = $('#total_kyat').val();
        //             $('.form-group .previous_remain_kyat').each(function () {
        //                 var inputVal = $(this).val();
        //                 if ($.isNumeric(inputVal)) {
        //                     $payment_kyat = parseInt(previous_remain_kyat) + parseInt(inputVal);
        //                 }
        //             });
        //             $('#buy_debit_kyat').val($payment_kyat);
        //         });
        //     $('.form-group').on('input','.previous_remain_pal',function () {
        //         var previous_remain_pal=$('#total_pal').val();
        //         $('.form-group .previous_remain_pal').each(function () {
        //             var inputVal=$(this).val();
        //             if($.isNumeric(inputVal)){
        //                 $payment_pal=parseInt(previous_remain_pal) +parseInt(inputVal);
        //             }
        //             if ($payment_pal < 16){
        //                 $('#buy_debit_pal').val($payment_pal);
        //                 $('#buy_debit_kyat').val($payment_kyat);
        //             }
        //             else if($payment_pal >= 16){
        //                 $pal_plus=parseInt($payment_pal/16);
        //                 $aa=$payment_pal%16;
        //                 $('#buy_debit_pal').val($aa);
        //                 $('#buy_debit_kyat').val($payment_kyat+$pal_plus);
        //             }
        //
        //
        //         });
        //
        //     });
        //
        //     $('.form-group').on('input','.previous_remain_yae',function () {
        //         var previous_remain_yae=parseFloat($('#total_yae').val());
        //         $('.form-group .previous_remain_yae').each(function () {
        //             var inputVal1 = $(this).val();
        //             if ($.isNumeric(inputVal1)) {
        //                 $payment_y = previous_remain_yae + parseFloat(inputVal1);
        //                 $payment_yae = parseFloat($payment_y).toFixed(2);
        //             }
        //             if($payment_yae < 8 ){
        //                 if(($('#buy_debit_pal').val()) < 16){
        //
        //                     $('#buy_debit_yae').val($payment_yae);
        //                     $('#buy_debit_pal').val($payment_pal);
        //                 }
        //                 // if(($('#buy_debit_pal').val()) < 16){
        //                 //     // $pal_plus=parseInt($payment_pal/16);
        //                 //     // $payment_pal1=$payment_pal%16;
        //                 //     // $('#buy_debit_yae').val(parseFloat($payment_yae).toFixed(2));
        //                 //     // $('#buy_debit_pal').val(parseInt($payment_pal1+$pal_plus));
        //                 // }
        //                 else if(($('#buy_debit_pal').val()) > 16){
        //                     $payment_pal2=$payment_pal%16;
        //                     $('#buy_debit_yae').val(parseFloat($payment_yae).toFixed(2));
        //                     $('#buy_debit_pal').val(parseInt($payment_pal2));
        //                 }
        //
        //                 }
        //             // else if($payment_yae >= 8){
        //             //
        //             //     if(($('#buy_debit_pal').val()) < 16){
        //             //         $yae_plus=parseInt($payment_yae/8);
        //             //         $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
        //             //         $('#buy_debit_pal').val(parseInt($payment_pal+$yae_plus));
        //             //     }
        //             // }
        //             // else if ( ($('#buy_debit_pal').val()) >=16){
        //             //     $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
        //             //     $payment_pal+=$payment_yae/8;
        //             //     $pal_plus=$payment_pal/16;
        //             //     $palremain=parseInt($payment_pal%16);
        //             //     $('#buy_debit_pal').val($palremain);
        //             //     $('#buy_debit_kyat').val(parseInt($payment_kyat+$pal_plus));
        //             //
        //             // }
        //         });
        //     });


            $(document).ready(function () {
                $('.form-group').on('input', '.previous_remain_kyat', function () {
                    //var previous_remain_kyat=$kyat;
                    var previous_remain_kyat = $('#total_kyat').val();
                    $('.form-group .previous_remain_kyat').each(function () {
                        var inputVal = $(this).val();
                        if ($.isNumeric(inputVal)) {
                            $payment_kyat = parseInt(previous_remain_kyat) + parseInt(inputVal);
                        }
                    });
                    $('#buy_debit_kyat').val($payment_kyat);
                });
                $('.form-group').on('input','.previous_remain_pal',function () {
                    var previous_remain_pal=$('#total_pal').val();
                    $('.form-group .previous_remain_pal').each(function () {
                        var inputVal=$(this).val();
                        if($.isNumeric(inputVal)){
                            $payment_pal=parseInt(previous_remain_pal) +parseInt(inputVal);
                        }
                        if ($payment_pal < 16){
                            $('#buy_debit_pal').val($payment_pal);
                            $('#buy_debit_kyat').val($payment_kyat);
                        }
                        else if($payment_pal >= 16){
                            $pal_plus=$payment_pal/16;
                            $aa=$payment_pal%16;
                            $('#buy_debit_pal').val($aa);
                            $('#buy_debit_kyat').val($payment_kyat+$pal_plus);
                        }
                    });
                });
                $('.form-group').on('input','.previous_remain_yae',function () {
                    var previous_remain_yae=parseFloat($('#total_yae').val());
                    $('.form-group .previous_remain_yae').each(function () {
                        var inputVal1 = $(this).val();
                        if ($.isNumeric(inputVal1)) {
                            $payment_y = previous_remain_yae + parseFloat(inputVal1);
                            $payment_yae = parseFloat($payment_y).toFixed(2);
                        }
                        if($payment_yae < 8 ){
                            $('#buy_debit_yae').val($payment_yae);
                            $('#buy_debit_pal').val($payment_pal);
                        }
                        else if($payment_yae >= 8){
                            $yae_plus=parseInt($payment_yae/8);
                            $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
                            $('#buy_debit_pal').val(parseInt($payment_pal+$yae_plus));
                        }
                        if ( ($('#buy_debit_pal').val()) >=16){
                            $('#buy_debit_yae').val(parseFloat($payment_yae%8).toFixed(2));
                            $payment_pal+=$payment_yae/8;
                            $pal_plus=$payment_pal/16;
                            $palremain=parseInt($payment_pal%16);
                            $('#buy_debit_pal').val($palremain);
                            $('#buy_debit_kyat').val(parseInt($payment_kyat+$pal_plus));
                        }
                    });
                });


        $('.form-group').on('input','#first_name',function () {
            var totalSum=0;
            $('.form-group #first_name').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum +=parseFloat(inputVal);
                }
            });
            $('#showpoint').val(totalSum);
        });
        $('.form-group').on('input','.pc10',function () {
            var totalSum=0;
            $('.form-group .pc10').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text10').val(totalSum);
        });
        $('.form-group').on('input','.pc11',function () {
            var totalSum=0;
            $('.form-group .pc11').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text11').val(totalSum);
        });
        $('.form-group').on('input','.pc12',function () {
            var totalSum=0;
            $('.form-group .pc12').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text12').val(totalSum);
        });
       $('.form-group').on('input','.pc15',function () {
            var totalSum=0;
            $('.form-group .pc15').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text15').val(totalSum);
        });

        $('.form-group').on('input','.pc14',function () {
            var totalSum=0;
            $('.form-group .pc14').each(function () {
                var inputVal=$(this).val();
                if($.isNumeric(inputVal)){
                    totalSum =parseFloat(inputVal);
                }
            });
            $('#text14').val(totalSum);
        });
            });

    </script>

    {{--<script>--}}
        {{--$(document).ready(function () {--}}

            {{--$remainkyat=0;--}}
            {{--$remainpal=0;--}}
            {{--$remainyae=0.0;--}}

            {{--$('.form-group').on('input', '.pc23', function () {--}}
                    {{--$totalAmountKyat = parseInt($('#buy_debit_kyat').val());--}}
                {{--$('.form-group .pc23').each(function () {--}}
                        {{--$paykyat = $(this).val();--}}
                    {{--if ($.isNumeric($paykyat)) {--}}
                        {{--if ($paykyat <= $totalAmountKyat) {--}}
                            {{--$remainkyat = $totalAmountKyat - $paykyat;--}}
                            {{--$('#now_remain_kyat').val($remainkyat);--}}
                        {{--}--}}

                    {{--}--}}
                {{--});--}}
            {{--});--}}
            {{--$('.form-group').on('input','.pc24',function () {--}}
                {{--$totalAmountPal=parseInt($('#buy_debit_pal').val());--}}
                {{--$nowremainkyat=parseInt($('#now_remain_kyat').val());--}}
                {{--$apal=parseInt($('#payment_pal').val());--}}

                {{--$('.form-group .pc24').each(function () {--}}
                    {{--$paypal=$(this).val();--}}
                    {{--if($.isNumeric($paypal)){--}}
                        {{--if($paypal <= $totalAmountPal){--}}
                            {{--$totalAmountPal -=$paypal;--}}
                            {{--$('#now_remain_pal').val($totalAmountPal);--}}
                            {{--$('#now_remain_kyat').val($remainkyat);--}}

                        {{--}--}}
                        {{--// else if($paypal <= $totalAmountPal){--}}
                        {{--//     $nowremainkyat=$nowremainkyat-1;--}}
                        {{--//     $('#now_remain_kyat').val($nowremainkyat);--}}
                        {{--//     $totalAmountPal=$totalAmountPal+16;--}}
                        {{--//     $remainpal=$totalAmountPal-$paypal;--}}
                        {{--//     $('#now_remain_pal').val($remainpal);--}}
                        {{--//--}}
                        {{--// }--}}
                        {{--else if($paypal > $totalAmountPal){--}}
                            {{--$nowremainkyat=$nowremainkyat-1;--}}
                            {{--$('#now_remain_kyat').val($nowremainkyat);--}}
                            {{--$totalAmountPal=$totalAmountPal+16;--}}
                            {{--$remainpal=$totalAmountPal-$paypal;--}}
                            {{--$('#now_remain_pal').val($remainpal);--}}

                        {{--}--}}
                        {{--else if($totalAmountPal===$apal){--}}
                            {{--$('#now_remain_kyat').val($remainkyat);--}}

                        {{--}--}}

                    {{--}--}}
                {{--});--}}
            {{--});--}}
            {{--$('.form-group').on('input','.pc25',function () {--}}
                {{--$nowremainkyat=parseInt($('#now_remain_kyat').val());--}}
                {{--$totalAmountYae=parseFloat($('#buy_debit_yae').val());--}}
                {{--$nowremainpal=parseInt($('#now_remain_pal').val());--}}
                {{--$aat=parseInt($('#payment_pal').val());--}}
                {{--$aar=parseInt($('#buy_debit_pal').val());--}}
                {{--$('.form-group .pc25').each(function () {--}}
                    {{--$payyae=$(this).val();--}}
                    {{--if($.isNumeric($payyae)){--}}
                        {{--if($payyae <= $totalAmountYae){--}}
                            {{--if($nowremainpal > 0) {--}}
                                {{--// $('#now_remain_kyat').val($remainkyat);--}}

                                {{--if($aat < $aar){--}}
                                    {{--$('#now_remain_kyat').val($remainkyat);--}}
                                    {{--// $totalAmountYae -=$payyae;--}}
                                    {{--// $('#now_remain_yae').val($totalAmountYae);--}}
                                    {{--$aay=$aar-$aat;--}}
                                    {{--$('#now_remain_pal').val($aay);--}}

                                    {{--$totalAmountYae -=$payyae;--}}
                                    {{--$('#now_remain_yae').val($totalAmountYae);--}}

                                {{--}--}}
                                {{--if($aat > $aar){--}}
                                    {{--$remainkyat=parseInt($('#now_remain_kyat').val());--}}
                                    {{--$('#now_remain_kyat').val($remainkyat);--}}
                                    {{--$aar=$aar+16;--}}
                                    {{--$aay=$aar-$aat;--}}
                                    {{--$('#now_remain_pal').val($aay);--}}
                                     {{--$totalAmountYae -=$payyae;--}}
                                    {{--$('#now_remain_yae').val($totalAmountYae);--}}

                                {{--}--}}
                                {{--else if ($aat === $aar){--}}
                                    {{--$akyat=parseInt($('#payment_kyat').val());--}}
                                    {{--$aKyat=parseInt($('#buy_debit_kyat').val());--}}
                                    {{--$nowkyat=$aKyat-$akyat;--}}
                                    {{--$('#now_remain_kyat').val($nowkyat);--}}

                                    {{--$now=$aar-$aat;--}}
                                    {{--$('#now_remain_pal').val($now);--}}
                                    {{--$totalAmountYae -=$payyae;--}}
                                    {{--$('#now_remain_yae').val($totalAmountYae);--}}

                                {{--}--}}

                                {{--// $payPal=$('#payment_pal').val();--}}
                                {{--// $TotalPal=$('#buy_debit_pal').val();--}}
                                {{--// $remainPalTotal=$TotalPal-$payPal;--}}

                            {{--}--}}
                            {{--// else if ($nowremainpal === 0){--}}
                            {{--else if ($aat === $aar){--}}
                                {{--$akyat=parseInt($('#payment_kyat').val());--}}
                                {{--$aKyat=parseInt($('#buy_debit_kyat').val());--}}
                                {{--$nowkyat=$aKyat-$akyat;--}}
                                {{--$('#now_remain_kyat').val($nowkyat);--}}

                                {{--$now=$aar-$aat;--}}
                                {{--$('#now_remain_pal').val($now);--}}
                                {{--$totalAmountYae -=$payyae;--}}
                                {{--$('#now_remain_yae').val($totalAmountYae);--}}

                            {{--}--}}


                        {{--}--}}
                        {{--else if($payyae > $totalAmountYae){--}}
                            {{--if($nowremainpal > 0 ){--}}
                                {{--$nowremainpal=$nowremainpal-1;--}}
                                {{--$('#now_remain_pal').val($nowremainpal);--}}
                                {{--$totalAmountYae=parseFloat(($totalAmountYae+8)).toFixed(2);--}}
                                {{--$remainyae=parseFloat($totalAmountYae-$payyae);--}}
                                {{--$('#now_remain_yae').val($remainyae);--}}
                            {{--}--}}
                             {{--// else if ($nowremainpal === 0){--}}
                             {{--else if ($aat  === $aar){--}}
                                {{--$nowremainkyat=$nowremainkyat-1;--}}
                                 {{--$('#now_remain_kyat').val($nowremainkyat);--}}

                                {{--$nowremainpal1=$nowremainpal+15;--}}
                                {{--// $nowpal=$nowremainpal1%16;--}}
                                {{--// $remainderpal=$nowremainpal/16;--}}
                                {{--// $nowpal1=$nowpal-$remainderpal;--}}
                                {{--$('#now_remain_pal').val($nowremainpal1);--}}
                                {{--$totalAmountYae=parseFloat(($totalAmountYae+8)).toFixed(2);--}}
                                {{--$remainyae=parseFloat($totalAmountYae-$payyae);--}}
                                {{--$('#now_remain_yae').val($remainyae);--}}

                            {{--}--}}
                        {{--}--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}
    <script>
        $(document).ready(function () {
            $('#now_total_ayot_btn').click(function () {
                $totalayotkyat=$('#total_ayot_kyat').val();
                $totalayotkyat=parseInt($totalayotkyat);
                $('.form-group .return_ayot_kyat').each(function () {
                    $inputVal=$(this).val();
                    if($.isNumeric($inputVal)){
                        $nowtotalayotkyat=$totalayotkyat-$inputVal;
                        $('#now_total_ayot_kyat').val($nowtotalayotkyat);
                    }
                });
                $totalayotpa=$('#total_ayot_pal').val();
                $totalayotpal=parseInt($totalayotpa);
                $('.form-group .return_ayot_pal').each(function () {
                    $inputValPal=$(this).val();
                    if($.isNumeric($inputValPal)){
                        if ($inputValPal < $totalayotpal) {
                            $nowtotalayotpal = $totalayotpal - $inputValPal;
                            $('#now_total_ayot_pal').val($nowtotalayotpal);
                        }
                        else if($inputValPal > $totalayotpal){
                            $test1=parseInt($('#now_total_ayot_kyat').val()-1);
                            $('#now_total_ayot_kyat').val($test1);
                            $totalayotpal1=parseInt($totalayotpal)+16;
                            $totalayotpal2=parseInt($totalayotpal1-$inputValPal);
                            $('#now_total_ayot_pal').val($totalayotpal2);
                        }
                        else if($inputValPal==$totalayotpal){
                            $totalayotpal3=parseInt($totalayotpal);
                            $totalayotpal4=parseInt($totalayotpal3-$inputValPal);

                            $('#now_total_ayot_pal').val($totalayotpal4);

                        }
                    }
                });
                $totalayotyae=parseFloat($('#total_ayot_yae').val()).toFixed(2);
                $totalayotyae=parseFloat($totalayotyae);
                $totalayotpal12=parseInt($('#now_total_ayot_pal').val());
                $('.form-group .return_ayot_yae').each(function () {
                    $inputValYae=$(this).val();
                    if($.isNumeric($inputValYae)){
                       if($inputValYae <= $totalayotyae){
                           $nowtotalayotyae=parseFloat($totalayotyae-$inputValYae).toFixed(2);
                           $('#now_total_ayot_yae').val($nowtotalayotyae);
                       }
                       else if($inputValYae > $totalayotyae){
                           // $test=parseInt($('#now_total_ayot_pal').val()-1);
                           // $('#now_total_ayot_pal').val($test);
                           if ($inputValPal < $totalayotpal) {
                               $test=parseInt($nowtotalayotpal-1);
                               $('#now_total_ayot_pal').val($test);
                           }
                           else if($inputValPal > $totalayotpal){
                               $test5=parseInt($totalayotpal2-1);
                               $('#now_total_ayot_pal').val($test5);
                           }
                           else if($inputValPal == $totalayotpal){
                               $test2=parseInt($('#now_total_ayot_kyat').val()-1);
                               $('#now_total_ayot_kyat').val($test2);
                               $totalayotpal4=parseInt($totalayotpal4+16);
                               $('#now_total_ayot_pal').val($totalayotpal4-1);
                           }

                           $totalayotyae1=parseFloat($totalayotyae)+8;
                           $totalayotyae2=parseFloat($totalayotyae1-$inputValYae).toFixed(2);
                           $('#now_total_ayot_yae').val($totalayotyae2);

                       }

                    }
                });
            });
        });
    </script>
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('#payment_btn').click(function () {--}}
                {{--$buy_debit_kyat_one=$('#buy_debit_kyat').val();--}}
                {{--$buy_debit_kyat=parseInt($buy_debit_kyat_one);--}}
                {{--$('.form-group .pc23').each(function () {--}}
                    {{--$inputVal=$(this).val();--}}
                    {{--if($.isNumeric($inputVal)){--}}
                        {{--$buy_debit_kyat=$buy_debit_kyat-$inputVal;--}}
                        {{--$('#now_remain_kyat').val($buy_debit_kyat);--}}
                    {{--}--}}
                {{--});--}}
                {{--$buy_debit_pal_one=$('#buy_debit_pal').val();--}}
                {{--$buy_debit_pal=parseInt($buy_debit_pal_one);--}}
                {{--$('.form-group .pc24').each(function () {--}}
                    {{--$inputValPal=$(this).val();--}}
                    {{--if($.isNumeric($inputValPal)){--}}
                        {{--if ($inputValPal < $buy_debit_pal) {--}}
                            {{--$buy_debit_pal_total = $buy_debit_pal-$inputValPal;--}}
                            {{--$('#now_remain_pal').val($buy_debit_pal_total);--}}
                        {{--}--}}
                        {{--else if($inputValPal > $buy_debit_pal){--}}
                            {{--$test1=parseInt($('#now_remain_kyat').val()-1);--}}
                            {{--$('#now_remain_kyat').val($test1);--}}
                            {{--$buy_debit_pal1=parseInt($buy_debit_pal)+16;--}}
                            {{--$buy_debit_pal2=parseInt($buy_debit_pal1-$inputValPal);--}}
                            {{--$('#now_remain_pal').val($buy_debit_pal2);--}}
                        {{--}--}}
                        {{--else if($inputValPal==$buy_debit_pal){--}}
                            {{--$buy_debit_pal3=parseInt($buy_debit_pal);--}}
                            {{--$buy_debit_pal4=parseInt($buy_debit_pal3-$inputValPal);--}}

                            {{--$('#now_remain_pal').val($buy_debit_pal4);--}}

                        {{--}--}}
                    {{--}--}}
                {{--});--}}
                {{--$buy_debit_yae6=parseFloat($('#buy_debit_yae').val()).toFixed(2);--}}
                {{--$buy_debit_yae=parseFloat($buy_debit_yae6);--}}
                {{--$now_remain_pal12=parseInt($('#now_remain_pal').val());--}}
                {{--$('.form-group .pc25').each(function () {--}}
                    {{--$inputValYae=$(this).val();--}}
                    {{--if($.isNumeric($inputValYae)){--}}
                       {{--if($inputValYae <= $buy_debit_yae){--}}
                           {{--$buy_debit_yae=parseFloat($buy_debit_yae-$inputValYae).toFixed(2);--}}
                           {{--$('#now_remain_yae').val($buy_debit_yae);--}}
                       {{--}--}}
                       {{--else if($inputValYae > $buy_debit_yae){--}}
                           {{--// $test=parseInt($('#now_remain_pal').val()-1);--}}
                           {{--// $('#now_remain_pal').val($test);--}}
                           {{--if ($inputValPal < $buy_debit_pal) {--}}
                               {{--$test=parseInt($buy_debit_pal_total-1);--}}
                               {{--$('#now_remain_pal').val($test);--}}
                           {{--}--}}
                           {{--else if($inputValPal > $buy_debit_pal){--}}
                               {{--$test5=parseInt($buy_debit_pal2-1);--}}
                               {{--$('#now_remain_pal').val($test5);--}}
                           {{--}--}}
                           {{--else if($inputValPal == $buy_debit_pal){--}}
                               {{--$test2=parseInt($('#now_remain_kyat').val()-1);--}}
                               {{--$('#now_remain_kyat').val($test2);--}}
                               {{--$buy_debit_pal4=parseInt($buy_debit_pal4+16);--}}
                               {{--$('#now_remain_pal').val($buy_debit_pal4-1);--}}
                           {{--}--}}

                           {{--$buy_debit_yae1=parseFloat($buy_debit_yae)+8;--}}
                           {{--$buy_debit_yae2=parseFloat($buy_debit_yae1-$inputValYae).toFixed(2);--}}
                           {{--$('#now_remain_yae').val($buy_debit_yae2);--}}

                       {{--}--}}

                    {{--}--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    <script>
        $(document).ready(function () {
            $('#return_gold_btn').click(function () {
                $buy_debit_kyat_one=$('#buy_debit_kyat').val();
                $buy_debit_kyat=parseInt($buy_debit_kyat_one);
                $('.form-group .return_gold_kyat').each(function () {
                    $inputVal=$(this).val();
                    if($.isNumeric($inputVal)){
                        $buy_debit_kyat=$buy_debit_kyat-$inputVal;
                        $('#net_pay_kyat').val($buy_debit_kyat);
                    }
                });
                $buy_debit_pal_one=$('#buy_debit_pal').val();
                $buy_debit_pal=parseInt($buy_debit_pal_one);
                $('.form-group .return_gold_pal').each(function () {
                    $inputValPal=$(this).val();
                    if($.isNumeric($inputValPal)){
                        if ($inputValPal < $buy_debit_pal) {
                            $buy_debit_pal_total=$buy_debit_pal-$inputValPal;
                            $('#net_pay_pal').val($buy_debit_pal_total);
                        }
                        else if($inputValPal > $buy_debit_pal){
                            $test1=parseInt($('#net_pay_kyat').val()-1);
                            $('#net_pay_kyat').val($test1);
                            $buy_debit_pal1=parseInt($buy_debit_pal)+16;
                            $buy_debit_pal2=parseInt($buy_debit_pal1-$inputValPal);
                            $('#net_pay_pal').val($buy_debit_pal2);
                        }
                        else if($inputValPal==$buy_debit_pal){
                            $buy_debit_pal3=parseInt($buy_debit_pal);
                            $buy_debit_pal4=parseInt($buy_debit_pal3-$inputValPal);

                            $('#net_pay_pal').val($buy_debit_pal4);

                        }
                    }
                });
                $buy_debit_yae6=parseFloat($('#buy_debit_yae').val()).toFixed(2);
                $buy_debit_yae=parseFloat($buy_debit_yae6);
                $now_remain_pal12=parseInt($('#net_pay_pal').val());
                $('.form-group .return_gold_yae').each(function () {
                    $inputValYae=$(this).val();
                    if($.isNumeric($inputValYae)){
                       if($inputValYae <= $buy_debit_yae){
                           $buy_debit_yae=parseFloat($buy_debit_yae-$inputValYae).toFixed(2);
                           $('#net_pay_yae').val($buy_debit_yae);
                       }
                       else if($inputValYae > $buy_debit_yae){
                           // $test=parseInt($('#now_remain_pal').val()-1);
                           // $('#now_remain_pal').val($test);
                           if ($inputValPal < $buy_debit_pal) {
                               $test=parseInt($buy_debit_pal_total-1);
                               $('#net_pay_pal').val($test);
                           }
                           else if($inputValPal > $buy_debit_pal){
                               $test5=parseInt($buy_debit_pal2-1);
                               $('#net_pay_pal').val($test5);
                           }
                           else if($inputValPal == $buy_debit_pal){
                               $test2=parseInt($('#net_pay_kyat').val()-1);
                               $('#net_pay_kyat').val($test2);
                               $buy_debit_pal4=parseInt($buy_debit_pal4+16);
                               $('#net_pay_pal').val($buy_debit_pal4-1);
                           }

                           $buy_debit_yae1=parseFloat($buy_debit_yae)+8;
                           $buy_debit_yae2=parseFloat($buy_debit_yae1-$inputValYae).toFixed(2);
                           $('#now_remain_yae').val($buy_debit_yae2);

                       }

                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#payment_btn').click(function () {
                $buy_debit_kyat_one=$('#net_pay_kyat').val();
                $buy_debit_kyat=parseInt($buy_debit_kyat_one);
                $('.form-group .pc23').each(function () {
                    $inputVal=$(this).val();
                    if($.isNumeric($inputVal)){
                        if ($inputVal <= $buy_debit_kyat) {
                            $buy_debit_kyat=$buy_debit_kyat-$inputVal;
                            $('#now_remain_kyat').val($buy_debit_kyat);
                        }
                        else if($inputVal > $buy_debit_kyat){

                            $buy_debit_kyat=$inputVal-$buy_debit_kyat;
                            $('#now_remain_kyat').val(-$buy_debit_kyat);
                        }
                    }
                });
                $netpaypal=$('#net_pay_pal').val();
                $netpaypal=parseInt($netpaypal);
                $payment_kyat_pal=$('#payment_kyat').val();
                $payment_kyat_pal=parseInt($payment_kyat_pal);
                $net_pay_kyat_pal=$('#net_pay_kyat').val();
                $net_pay_kyat_pal=parseInt($net_pay_kyat_pal);

                $('.form-group .pc24').each(function () {
                    $inputValPal=$(this).val();
                    if($.isNumeric($inputValPal)) {
                       if ($payment_kyat_pal < $net_pay_kyat_pal) {
                        if ($inputValPal < $netpaypal) {
                            $netpaypal = $netpaypal - $inputValPal;
                            $('#now_remain_pal').val($netpaypal);
                        }
                        else if ($inputValPal > $netpaypal) {
                            $test1 = parseInt($('#now_remain_kyat').val()) - 1;
                            $('#now_remain_kyat').val($test1);
                            $netpaypal1 = parseInt($netpaypal) + 16;
                            $netpaypal1 = parseInt($netpaypal1 - $inputValPal);
                            $('#now_remain_pal').val($netpaypal1);
                        }
                        else if ($inputValPal == $netpaypal) {
                            $netpaypal2 = parseInt($netpaypal);
                            $netpaypal2 = parseInt($netpaypal2 - $inputValPal);

                            $('#now_remain_pal').val($netpaypal2);
                        }
                       //}
                        // else if($inputValkyatfour1 > $buy_debit_kyat){
                        //     $('#now_remain_pal').val("$buy_debit_pal_total");
                        //
                        // }
                        }
                       else if($payment_kyat_pal > $net_pay_kyat_pal){
                           if ($inputValPal > $netpaypal) {
                               $netpaypal = $inputValPal - $netpaypal;
                               $('#now_remain_pal').val(-$netpaypal);
                           }
                           else if ($inputValPal < $netpaypal) {
                               $test1 = parseInt($('#now_remain_kyat').val()) + 1;
                               $('#now_remain_kyat').val($test1);
                               $inputValPal = parseInt($inputValPal) + 16;
                               $netpaypal1 = parseInt($inputValPal - $netpaypal);
                               $('#now_remain_pal').val(-$netpaypal1);

                               // if($inputValYae < $netpayyae){
                               //     $inputValPal4=parseInt($inputValPal-1);
                               //     $netpaypal1 = parseInt($inputValPal4)+16;
                               //     $netpaypal1 = parseInt($netpaypal1 - $netpaypal);
                               //     $('#now_remain_pal').val(-$netpaypal1);
                               // }
                               // else if ($inputValYae >= $netpayyae){
                               //     $netpaypal1 = parseInt($inputValPal) + 16;
                               //     $netpaypal1 = parseInt($netpaypal1 - $netpaypal);
                               //     $('#now_remain_pal').val(-$netpaypal1);
                               // }
                           }
                           else if ($inputValPal == $netpaypal) {
                               $netpaypal2 = parseInt($netpaypal);
                               $netpaypal2 = parseInt($netpaypal2 - $inputValPal);

                               $('#now_remain_pal').val($netpaypal2);
                           }
                       }
                       else if($payment_kyat_pal == $net_pay_kyat_pal){
                           if ($inputValPal > $netpaypal) {
                               $netpaypal = $inputValPal - $netpaypal;
                               $('#now_remain_pal').val(-$netpaypal);
                           }
                           else if ($inputValPal < $netpaypal) {
                               $test1 = parseInt($('#now_remain_kyat').val()) - 1;
                               $('#now_remain_kyat').val($test1);
                               $netpaypal1 = parseInt($inputValPal)+16;
                               $netpaypal = parseInt($netpaypal1 - $netpaypal);
                               $('#now_remain_pal').val(-$netpaypal);
                               // else if ($inputValYae >= $netpayyae){
                               //     $netpaypal1 = parseInt($inputValPal) + 16;
                               //     $netpaypal7 = parseInt($netpaypal1 - $netpaypal);
                               //     $('#now_remain_pal').val(-$netpaypal7);
                               // }
                           }
                           else if ($inputValPal == $netpaypal) {
                               $netpaypal2 = parseInt($netpaypal);
                               $netpaypal2 = parseInt($netpaypal2 - $inputValPal);

                               $('#now_remain_pal').val($netpaypal2);
                           }
                       }

                    }
                });
                $netpayyae1=parseFloat($('#net_pay_yae').val()).toFixed(2);
                $netpayyae=parseFloat($netpayyae1);

                $netpaypal=$('#net_pay_pal').val();
                $netpaypal=parseInt($netpaypal);

                $inputValPal=$('#payment_pal').val();
                $inputValPal=parseInt($inputValPal);

                $inputValkyatOne=parseInt($('#payment_kyat').val());
                $netpaykyat=parseInt($('#net_pay_kyat').val());
                $('.form-group .pc25').each(function () {
                    $inputValYae=$(this).val();
                    if($.isNumeric($inputValYae)) {
                        if ($inputValYae < $netpayyae) {
                            if ($inputValkyatOne < $netpaykyat) {
                                $netpayyae = $netpayyae - $inputValYae;
                                $netpayyae = parseFloat($netpayyae).toFixed(2);
                                $('#now_remain_yae').val($netpayyae);
                            }
                            else if ($inputValkyatOne > $netpaykyat) {
                                if($inputValPal < $netpaypal || $inputValPal > $netpaypal){
                                    $test = parseInt($('#now_remain_pal').val())+1;
                                    $('#now_remain_pal').val($test);
                                }
                                else if ($inputValPal == $netpaypal){
                                    $test1=parseInt($inputValkyatOne)-1;
                                    $test1=$test1-$netpaykyat;
                                    $test1=parseInt($test1);
                                    $('#now_remain_kyat').val(-$test1);
                                    $inputValPal=parseInt($inputValPal)-1;
                                    $inputValPal=parseInt($inputValPal)+16;
                                    $test=$inputValPal-$netpaypal;
                                    $test=parseInt($test);
                                    $('#now_remain_pal').val(-$test);

                                }

                                $inputValYae = parseFloat($inputValYae) + 8;
                                $netpayyae = parseFloat($inputValYae - $netpayyae).toFixed(2);
                                $('#now_remain_yae').val(-$netpayyae);
                            }
                            else if($inputValkyatOne == $netpaykyat){

                                if($inputValPal == $netpaypal){
                                    $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                    $inputValkyatOne=parseInt($inputValkyatOne);
                                    $('#now_remain_kyat').val($inputValkyatOne);

                                    $inputValPal=$netpaypal-$inputValPal;
                                    $inputValPal=parseInt($inputValPal);
                                    $('#now_remain_pal').val($inputValPal);


                                    $inputValYae=$netpayyae-$inputValYae;
                                    $inputValYae=parseFloat($inputValYae).toFixed(2);
                                    $('#now_remain_yae').val($inputValYae);

                                }
                                else if($inputValPal < $netpaypal){
                                    $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                    $inputValkyatOne=parseInt($inputValkyatOne);
                                    $('#now_remain_kyat').val($inputValkyatOne);

                                    $inputValPal=$netpaypal-$inputValPal;
                                    $inputValPal=parseInt($inputValPal);
                                    $('#now_remain_pal').val($inputValPal);

                                    $inputValYae=$netpayyae-$inputValYae;
                                    $inputValYae=parseFloat($inputValYae).toFixed(2);
                                    $('#now_remain_yae').val($inputValYae);

                                }
                                else if($inputValPal > $netpaypal){

                                    $inputValPal=parseInt($inputValPal)-1;
                                    $inputValPal=$inputValPal-$netpaypal;
                                    $inputValPal=parseInt($inputValPal);
                                    $('#now_remain_pal').val(-$inputValPal);
                                    $inputValYae=parseFloat($inputValYae)+8;
                                    $netpayyae =$inputValYae-$netpayyae;
                                    $netpayyae = parseFloat($netpayyae).toFixed(2);
                                    $('#now_remain_yae').val(-$netpayyae);
                                }

                            }

                        }
                        else if ($inputValYae > $netpayyae) {
                            if($inputValkyatOne < $netpaykyat){
                                if ($inputValPal < $netpaypal) {
                                    $test=parseInt($netpaypal-1);
                                    $test=$test-$inputValPal;
                                    $('#now_remain_pal').val($test);
                                }
                                else if ($inputValPal > $netpaypal) {
                                    $test5 = parseInt($netpaypal1 - 1);
                                    $('#now_remain_pal').val($test5);
                                }
                                else if ($inputValPal == $netpaypal){
                                    $kyatkyat=parseInt($('#now_remain_kyat').val())-1;
                                    $('#now_remain_kyat').val($kyatkyat);
                                    $inputValPalo=parseInt($netpaypal)+16;
                                    $inputValPaloo=$inputValPalo-$inputValPal;
                                    $inputValPal0=parseInt($inputValPaloo)-1;
                                    $('#now_remain_pal').val($inputValPal0);
                                }
                                $netpayyae = parseFloat($netpayyae) + 8;
                                $netpayyae = parseFloat($netpayyae - $inputValYae).toFixed(2);
                                $('#now_remain_yae').val($netpayyae);
                            }
                            else if($inputValkyatOne > $netpaykyat){
                                $netpayyae=parseFloat($inputValYae-$netpayyae).toFixed(2);
                                $('#now_remain_yae').val(-$netpayyae);
                            }
                            else if ($inputValkyatOne == $netpaykyat){
                                if ($inputValPal < $netpaypal) {
                                    $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                    $inputValkyatOne=parseInt($inputValkyatOne);
                                    $('#now_remain_kyat').val($inputValkyatOne);

                                    $netpaypal=parseInt($netpaypal)-1;
                                    $inputValPal=$netpaypal-$inputValPal;
                                    $inputValPal=parseInt($inputValPal);
                                    $('#now_remain_pal').val($inputValPal);

                                    $netpayyae = parseFloat($netpayyae) + 8;
                                    $netpayyae = parseFloat($netpayyae - $inputValYae).toFixed(2);
                                    $('#now_remain_yae').val($netpayyae);

                                }
                                else if ($inputValPal > $netpaypal) {
                                    $test5 = parseInt($inputValPal-$netpaypal);
                                    $('#now_remain_pal').val(-$test5);

                                    $netpayyae = parseFloat($netpayyae);
                                    $netpayyae = parseFloat($inputValYae-$netpayyae).toFixed(2);
                                    $('#now_remain_yae').val(-$netpayyae);
                                }
                                else if ($inputValPal == $netpaypal) {
                                    $netpayyae = parseFloat($netpayyae);
                                    $netpayyae = parseFloat($inputValYae-$netpayyae).toFixed(2);
                                    $('#now_remain_yae').val(-$netpayyae);
                                }


                                }
                        }
                        else if ($inputValYae == $netpayyae) {
                                if ($inputValkyatOne > $netpaykyat) {
                                    if ($inputValPal < $netpaypal){
                                        $inputValkyatOne=parseInt($inputValkyatOne)-1;
                                        $inputValkyatOne=$inputValkyatOne-$netpaykyat;
                                        $inputValkyatOne=parseInt($inputValkyatOne);
                                        $('#now_remain_kyat').val(-$inputValkyatOne);

                                        $inputValPal=parseInt($inputValPal)+16;
                                        $inputValPal=$inputValPal-$netpaypal;
                                        $inputValPal=parseInt($inputValPal);
                                        $('#now_remain_pal').val(-$inputValPal);
                                    }
                                    $netpayyae = $netpayyae - $inputValYae;
                                    $netpayyae = parseFloat($netpayyae).toFixed(2);
                                 $('#now_remain_yae').val($netpayyae);
                                }
                                else if($inputValkyatOne < $netpaykyat){
                                    if ($inputValPal < $netpaypal){
                                        $netpaykyat=parseInt($netpaykyat);
                                        $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                        $inputValkyatOne=parseInt($inputValkyatOne);
                                        $('#now_remain_kyat').val($inputValkyatOne);

                                        $inputValPal=$netpaypal-$inputValPal;
                                        $inputValPal=parseInt($inputValPal);
                                        $('#now_remain_pal').val($inputValPal);
                                    }
                                    // $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                    // $inputValkyatOne=parseInt($inputValkyatOne);
                                    // $('#now_remain_kyat').val($inputValkyatOne);

                                    $netpayyae = $netpayyae - $inputValYae;
                                    $netpayyae = parseFloat($netpayyae).toFixed(2);
                                    $('#now_remain_yae').val($netpayyae);
                                }
                                else if($inputValkyatOne == $netpaykyat){
                                    if ($inputValPal < $netpaypal){
                                        $netpaykyat=parseInt($netpaykyat);
                                        $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                        $inputValkyatOne=parseInt($inputValkyatOne);
                                        $('#now_remain_kyat').val($inputValkyatOne);

                                        $inputValPal=$netpaypal-$inputValPal;
                                        $inputValPal=parseInt($inputValPal);
                                        $('#now_remain_pal').val($inputValPal);

                                        $netpayyae = $netpayyae - $inputValYae;
                                        $netpayyae = parseFloat($netpayyae).toFixed(2);
                                        $('#now_remain_yae').val($netpayyae);
                                    }
                                    else if ($inputValPal > $netpaypal){
                                        $netpaykyat=parseInt($netpaykyat);
                                        $inputValkyatOne=$netpaykyat-$inputValkyatOne;
                                        $inputValkyatOne=parseInt($inputValkyatOne);
                                        $('#now_remain_kyat').val($inputValkyatOne);

                                        $inputValPal=$inputValPal-$netpaypal;
                                        $inputValPal=parseInt($inputValPal);
                                        $('#now_remain_pal').val(-$inputValPal);

                                        $netpayyae = $netpayyae - $inputValYae;
                                        $netpayyae = parseFloat($netpayyae).toFixed(2);
                                        $('#now_remain_yae').val($netpayyae);
                                    }
                                }
                            }
                        }
                });
            });
        });
    </script>

    <script>

        $(document).ready(function () {

            $('#customer_id').click(function () {
                $('.form-group .previous_remain_kyat').each(function () {
                    $bb=parseInt($('#customer_id').val());
                    $('#previous_remain_kyat').val($sql);


                });
            });
        });

    </script>
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('.form-group').on('input','.customer',function () {--}}
                {{--var mysql = require('mysql');--}}

                {{--var con = mysql.createConnection({--}}
                    {{--host: "localhost",--}}
                    {{--user: "root",--}}
                    {{--password: "root",--}}
                    {{--database: "MtdDatabase"--}}
                {{--});--}}

                {{--//con.connect(function(err) {--}}
                    {{--// if (err) throw err;--}}
                    {{--//Select all customers and return the result object:--}}
                        {{--// function (err, result, fields) {--}}
                        {{--// if (err) throw err;--}}
                        {{--// console.log(result);--}}
                    {{--/});--}}
                {{--// });--}}



                {{--$customer_id=$('#customer_id').val();--}}
                {{--$('.form-group .customer').each(function () {--}}
                    {{--$inputName=$(this).val();--}}
                    {{--//$sql=DB::select("select * from customers where id=5");--}}
                    {{--$aakd=con.query("SELECT * FROM customers WHERE id=5");--}}

                    {{--$sql="select 'id' from customers";--}}
                    {{--if($inputName===$customer_id){--}}

                         {{--$('#previous_remain_kyat').val($aakd);--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--$('#previous_remain_kyat').val("error");--}}
                    {{--}--}}

                {{--});--}}

            {{--});--}}

        {{--});--}}


    {{--</script>--}}




    {{--<script>--}}
        {{--$(document).ready(function () {--}}
                {{--$('.form-group').on('input','.ex1',function () {--}}
                    {{--$kyat=0;--}}
                    {{--$pal=0;--}}
                    {{--$yae=0;--}}
                    {{--$inputVal=0;--}}
                    {{--$number=16.6;--}}
                    {{--$('.form-group .ex1').each(function () {--}}
                        {{--$inputVal=$(this).val();--}}
                        {{--if($.isNumeric($inputVal)){--}}
                            {{--$kyat =parseInt($inputVal/$number);--}}
                            {{--$pal =parseFloat((($inputVal/$number)-$kyat)*16);--}}
                            {{--$pal1=parseInt($pal);--}}
                            {{--$yae=$pal-$pal1;--}}
                            {{--$yae1=$yae*8;--}}
                            {{--$form=parseFloat($yae1).toFixed(2);--}}

                            {{--// $pal2 =parseInt((((($inputVal%$number)/$number)*16)/$number)*8);--}}

                        {{--}--}}
                    {{--});--}}
                    {{--$('#kyat').val($kyat);--}}
                    {{--$('#pal').val($pal1);--}}
                    {{--$('#yae').val($form);--}}


                {{--});--}}
        {{--});--}}
    {{--</script>--}}

    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $(".id").toggle();
                $("#id").toggle();

            });
            $("#ring").click(function(){
                $(".ring").toggle();
            });
            $("#hide9").click(function(){
                $(".ring").hide();
            });

            $("#ring0").click(function(){
                $(".ring0").toggle();

            });
            $("#hide0").click(function(){
                $(".ring0").hide();
            });
            $("#ring1").click(function(){
                $(".ring1").toggle();

            });
            $("#hide1").click(function(){
                $(".ring1").hide();
            });
            $("#ring2").click(function(){
                $(".ring2").toggle();
            });
            $("#hide2").click(function(){
                $(".ring2").hide();
            });
        });
    </script>


    @yield('script')

</body>
</html>